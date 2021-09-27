<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Bcontroller extends Controller
{
    public function bencana()
    {
        $benc = DB::table('bencana')->get();

        return view('bencana',['bencana' => $benc]);
    }
    //
}
