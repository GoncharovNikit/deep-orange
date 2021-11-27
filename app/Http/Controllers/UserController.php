<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function apiprofile(Request $request)
    {
        
        //$userproducts = User::current_user();

        return view("user");
    }
}
