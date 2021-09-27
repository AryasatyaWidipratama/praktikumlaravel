<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function pelaporan()
    {
        $pel = DB::table('pelaporan')->get();

        return view('pelaporan',['pelaporan' => $pel]);
    }
    //
}
