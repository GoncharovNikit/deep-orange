<?php

namespace App\Http\Controllers;

use App\Models\EcoGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function apiprofile(Request $request)
    {
        
        //$userproducts = User::current_user();

        return view("user");
    }

    public function current_user(Request $request)
    {
        return json_encode(Auth::user());
    }

    public function eco_groups(Request $request)
    {
        return json_encode(EcoGroup::with(['users', 'events'])->get());
    }
}
