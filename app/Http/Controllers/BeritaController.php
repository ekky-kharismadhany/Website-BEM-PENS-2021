<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function getAllNews() {
        return view('berita');
    }

    public function getNews($id) {
        return view('isiberita');
    }
}
