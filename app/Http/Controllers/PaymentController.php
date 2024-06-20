<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Xendit\Configuration;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KelasTatapMuka;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;

class PaymentController extends Controller
{

    public function __construct()
    {
        Configuration::setXenditKey("xnd_development_Dk99ZuALmDeKEquMQlyWZDozXzyOMFayljkE46Z3dVHhkIBMLGygOzEgwOXYhaa");
        // Configuration::setXenditKey("xnd_production_1X2OuC1am3i41Q3y4ljRGCJzI01eUz0gQyIFucfMbJXXIsO5HozEabDP3AHxr"); //LIVE
    }

    public function show($id)
    {
        $klsoffline = KelasTatapMuka::find($id);
        return view('detailpembelian', compact('klsoffline'));
    }
    public function payment(Request $request)
    {
        // Validate request
        $request->validate([
            'id' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Fetch product data
        $klsoffline = KelasTatapMuka::find($request->id);
        $uuid = (string) Str::uuid();

        // Call Xendit
        $apiInstance = new InvoiceApi();
        $createInvoiceRequest = new CreateInvoiceRequest([
            'external_id' => $uuid,
            'description' => $klsoffline->description,
            'amount' => $klsoffline->price,
            'currency' => 'IDR',
            "customer" => [
                "given_names" => $request->name,
                "email" => $request->email,
            ],
            "success_redirect_url" => "https://testproskill.proskill.sch.id/succes/{$uuid}",
            "failure_redirect_url" => "http://127.0.0.1:8000",
        ]);

        try {
            $result = $apiInstance->createInvoice($createInvoiceRequest);

            // Insert into orders table
            $order = new Order();
            $order->product_id = $klsoffline->id;
            $order->checkout_link = $result['invoice_url'];
            $order->external_id = $uuid;
            $order->status = "pending";
            $order->save();

            return redirect($result['invoice_url']);
        } catch (\Xendit\XenditSdkException $e) {
            return redirect()->back()->with('error', 'Payment failed. Please try again.');
        }
    }

    public function success($id)
    {
        $apiInstance = new InvoiceApi();

        $result = $apiInstance->getInvoices(null, $id);

        //get data
        $klsoffline = Order::where('external_id', $id)->firstOrFail();

        if ($klsoffline->status == 'settled') {
            return response()->json('Pembayaran berhasil di proses');
        }
        //update status
        $klsoffline->status = $result[0]['status'];
        $klsoffline->save();
        return redirect()->route('Kelastatapmuka');
    }

    // public function handleWebhook(Request $request)
    // {
    //     // Verifikasi Xendit Callback Token
    //     $expectedToken = config('services.xendit.callback_token');
    //     $callbackToken = $request->header('X-CALLBACK-TOKEN');

    //     if ($expectedToken !== $callbackToken) {
    //         return response()->json(['message' => 'Token tidak valid'], 403);
    //     }

    //     // Validasi request webhook
    //     $validated = $request->validate([
    //         'external_id' => 'required|string',
    //         'status' => 'required|string',
    //     ]);

    //     // Cari order menggunakan external_id
    //     $order = Order::where('external_id', $validated['external_id'])->firstOrFail();

    //     // Perbarui status order berdasarkan status webhook
    //     if ($validated['status'] === 'PAID') {
    //         $order->status = 'PAID';
    //     } elseif ($validated['status'] === 'EXPIRED') {
    //         $order->status = 'EXPIRED';
    //     } elseif ($validated['status'] === 'FAILED') {
    //         $order->status = 'FAILED';
    //     }

    //     // Simpan order
    //     $order->save();

    //     // Tanggapi Xendit
    //     return response()->json(['message' => 'Webhook diterima dan diproses'], 200);
    // }
}
