<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail()
    {
        $det = DB::table('detail_korban')->get();

        return view('detail',['detail_korban' => $det]);
    }
    //
}
