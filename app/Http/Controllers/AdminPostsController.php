<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Comment;
use App\Http\Requests\AdminPostsRequest;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPostsRequest $request)
    {
        $User = User::findOrFail(1);

        $User->posts()->create([

            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'is_active' => $request->input('is_active'),
            'category_id' => $request->input('category_id')
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Post = Post::findOrFail($id);


        return view('admin.posts.show', compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('Post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPostsRequest $request, $id)
    {
        $Post = Post::findOrFail($id);
         $Post->update(
             [
                 "title" => $request->input("title"),
                 "content" => $request->input("content"),
                 "is_active" => $request->input("is_active"),
                 "category_id" => $request->input("category_id")
             ]
         );

         $Post->save();

//         OU : $Post->update($request->all());

         return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::whereId($id)->delete();

        return redirect()->route('posts.index');


    }
}
