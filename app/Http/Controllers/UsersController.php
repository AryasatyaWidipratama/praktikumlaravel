<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        $usr = DB::table('users')->get();

        return view('users',['users' => $usr]);
    }
    //
}
