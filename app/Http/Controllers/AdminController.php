<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class AdminController extends Controller
{
    public  function  dashboard(){
        return view("admin.admin");
    }

    public function logout() {

        $Posts = Post::all();

        $Categories = Category::all();
        return view("home", compact('Posts', 'Categories'));
    }
}
