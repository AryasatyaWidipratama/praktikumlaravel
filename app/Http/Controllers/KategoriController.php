<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori()
    {
        $kat = DB::table('kategori_bencana')->get();

        return view('kategori',['kategori_bencana' => $kat]);
    }
    //
}
