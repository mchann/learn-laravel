<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailBeritaController extends Controller
{
    public function detailBerita($id)
    {

        // Kembalikan tampilan dengan data berita
        return view('detailberita', ['id' => $id]);
    }
}
