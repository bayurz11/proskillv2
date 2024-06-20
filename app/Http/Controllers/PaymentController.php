<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Xendit\Configuration;
use Illuminate\Support\Str;
// use Xendit\Invoice\Invoice;
use Xendit\Invoice\Invoice;
use Illuminate\Http\Request;
use App\Models\KelasTatapMuka;
use Xendit\Invoice\InvoiceApi;
use App\Http\Controllers\Controller;
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
        // Validasi request
        $request->validate([
            'id' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Ambil data produk
        $klsoffline = KelasTatapMuka::find($request->id);
        $uuid = (string) Str::uuid();

        // Panggil Xendit
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
            "success_redirect_url" => url('/payment/success') . '?external_id=' . $uuid,
            "failure_redirect_url" => "http://127.0.0.1:8000",
        ]);

        try {
            $result = $apiInstance->createInvoice($createInvoiceRequest);

            // Insert ke tabel orders
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


    public function paymentSuccess(Request $request)
    {
        // Ambil external_id dari URL parameter
        $externalId = $request->external_id;

        // Panggil API Xendit untuk memverifikasi status pembayaran
        try {
            $invoice = Invoice::retrieve($externalId);

            if ($invoice['status'] === 'PAID') {
                // Temukan order berdasarkan external_id
                $order = Order::where('external_id', $externalId)->first();

                if ($order) {
                    // Update status order menjadi PAID
                    $order->status = 'PAID';
                    $order->save();
                }

                return redirect('https://testproskill.proskill.sch.id/Kelastatapmuka')->with('success', 'Pembayaran berhasil.');
            } else {
                return redirect('https://testproskill.proskill.sch.id/Kelastatapmuka')->with('error', 'Pembayaran belum diverifikasi.');
            }
        } catch (\Exception $e) {
            return redirect('https://testproskill.proskill.sch.id/Kelastatapmuka')->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
}
