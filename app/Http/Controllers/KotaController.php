<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function kota()
    {
        $kot = DB::table('kota')->get();

        return view('kota',['kota' => $kot]);
    }
    //
}
