<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view("admin.categories.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('file');

        if(!empty($file)) {

            $name = $file->getClientOriginalName();

            $file->move('images', $name);

        }


        $Category = Category::create(
            [
            'name' => $request->input('name')
            ]
        ); 

        if(!empty($file)) {

            $Category->photos()->create(
                [
                    'file' => $name
                ]
                );
        }



        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Category = Category::findOrFail($id);

        return view("admin.categories.show", compact("Category"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Category = Category::findOrFail($id);

        return view("admin.categories.edit", compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Category = Category::findOrFail($id);


        $file = $request->file('file');

        if(!empty($file)) {

            $name = $file->getClientOriginalName();

            $file->move('images', $name);

        }

        $Category->update(
            [
                'name' => $request->input('name')
            ]
        );

        if(!empty($file)) {

            if(empty($Category->photos()->first())){
                $Category->photos()->create([
                    'file' => $name
                ]
                );
            }else{
                $Category->photos()->update([
                    'file' => $name
                ]);
            }
        }


        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category = Category::findOrFail($id);

        $Category->delete($id);

        return redirect(route("categories.index"));
    }
}
