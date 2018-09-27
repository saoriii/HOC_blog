<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Posts = Post::orderBy('created_at', 'desc')->take(8)->get();

        return view ('posts.index', compact('Posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $Post = Post::findOrFail($id);

        return view ('posts.show', compact('Post'));
    }

    /* Méthode pour créer un commentaire visiteur */

    public function comments(Request $request, $id)
    {
        $Post = Post::findOrFail($id);

        $Post->comments()->create(
            [
                'author' => $request->input('author'),
                'email' => $request->input('email'),
                'content' => $request->input('content'),
                'is_active' => 0 
            ]
            );
        $Post->save();

        return redirect()->route('visiteurs.posts.show', $id);

    }



}
