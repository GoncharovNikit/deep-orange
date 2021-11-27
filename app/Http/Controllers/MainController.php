<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends Controller
{
    public function ListOfPosts(Request $request)
    {
        
        $posts = User::posts();


        return view("list_of_posts", compact("posts"));
    }
}
