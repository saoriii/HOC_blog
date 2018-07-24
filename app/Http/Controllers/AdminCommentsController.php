<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class AdminCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Comments = Comment::all();

        return view('admin.comments.index', compact('Comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Comment = Comment::findOrFail($id);

        return view('admin.comments.edit', compact('Comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // Fonction Delete
    {
        $Comment = Comment::findOrFail($id);

        $Comment->update(
            [
                'content' => $request->content,
                'author' => $request->author,
                'email' => $request->email,
                'is_active' => $request->is_active
            ]
            );

        $Comment->save();

            return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Comment = Comment::findOrFail($id);

        $Comment->delete();

        return redirect()->route('comments.index');
    }
}
