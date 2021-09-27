<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function usrrole()
    {
        $usrol = DB::table('user_role')->get();

        return view('usrrole',['user_role' => $usrol]);
    }
    //
}
