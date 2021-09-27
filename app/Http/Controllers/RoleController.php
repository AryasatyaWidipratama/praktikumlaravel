<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role()
    {
        $rol = DB::table('role')->get();

        return view('role',['role' => $rol]);
    }
    //
}
