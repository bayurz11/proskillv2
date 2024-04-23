<?php

namespace App\Http\Controllers;

use App\Models\About_us;
use App\Models\Artikel;
use App\Models\ArtikelYt;
use App\Models\Contact_us;
use App\Models\HomeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function Index()
    {
        $userLoggedIn = Auth::check();
        $jam_alamat = HomeSetting::all();
        $articles = Artikel::all();
        return view('index', compact('jam_alamat', 'userLoggedIn', 'articles'));
    }
    public function ShowBlog()
    {
        $userLoggedIn = Auth::check();
        $articles = Artikel::all();
        $links = ArtikelYt::all();
        return view('blog-grid', compact('userLoggedIn', 'articles', 'links'));
    }
    public function tatap_muka()
    {
        $userLoggedIn = Auth::check();
        $articles = Artikel::all();
        $links = ArtikelYt::all();
        return view('blog-grid', compact('userLoggedIn', 'articles', 'links'));
    }
    // public function ShowBlogDetails()
    // {
    //     $userLoggedIn = Auth::check();
    //     $articleId = request()->query('id');
    //     $article = Artikel::find($articleId);
    //     $articles = Artikel::all();
    //     if (!$article) {

    //         abort(404);
    //     }

    //     $links = ArtikelYt::all();
    //     return view('blog_details', compact('userLoggedIn', 'links', 'article', 'articles'));
    // }
    public function showBlogDetails(Request $request, $id) // tambahkan Request sebagai parameter
    {
        $userLoggedIn = Auth::check();
        $article = Artikel::find($id); // gunakan parameter $id langsung
        $articles = Artikel::all();

        if (!$article) {
            abort(404);
        }

        $links = ArtikelYt::all();
        return view('blog_details', compact('userLoggedIn', 'links', 'article', 'articles'));
    }

    public function ShowAboutUs()
    {
        $userLoggedIn = Auth::check();
        $tentang = About_us::all();
        return view('about-us', compact('tentang', 'userLoggedIn'));
    }
    public function ShowContactUs()
    {
        $userLoggedIn = Auth::check();
        $hubungi = Contact_us::all();
        return view('contact-us', compact('hubungi', 'userLoggedIn'));
    }
}
