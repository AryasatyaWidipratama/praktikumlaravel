<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KecController extends Controller
{
    public function index()
    {
        $kec = DB::table('kecamatan')->get();

        return view('index',['kecamatan' => $kec]);
    }
    
    
}
