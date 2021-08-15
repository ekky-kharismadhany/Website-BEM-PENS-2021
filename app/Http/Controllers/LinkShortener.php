<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinkShortener as Shortener;

class LinkShortener extends Controller
{
    public function index()
    {
        return view('shortener.index');
    }

    public function store(Request $request)
    {
        $forbiddens = array('berita', 'news', 'event', 'calendar', 'kontak', 'dashboard', 'login', 'register');
        foreach ($forbiddens as $forbidden) {
            if ($request->tautanPendek == $forbidden) {
                return view('shortener.result', [
                    'status' => 'error',
                    'link' => ''
                ]);
            }
        }
        $shortLink = Shortener::create([
            'link' => $request->tautanPanjang,
            'short-link' => $request->tautanPendek
        ]);

        return view('shortener.result', [
            'status' => 'success',
            'link' => $shortLink
        ]);
    }

    public function redirect($shortLink) {
        $find = Shortener::where('short-link', $shortLink)->first();
        return redirect($find->link);
    }
}
