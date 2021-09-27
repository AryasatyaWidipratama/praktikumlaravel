<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProvController extends Controller
{
    public function prov()
    {
        $prov = DB::table('provinsi')->get();

        return view('prov',['provinsi' => $prov]);
    }
    //
}
