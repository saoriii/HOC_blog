<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class AdminMediasController extends Controller
{
    public function index() {
        $Photos = Photo::all();

        /*dd($Photos);*/
        
        
        return view("admin.medias.index", compact('Photos'));
    }

    public function edit($id){

        $Photo = Photo::findOrFail($id);

        return view("admin.medias.edit", compact('Photo'));
    }

    public function upload() {
        return view("admin.medias.upload");
    }

    public function destroy($id){

        $Photo = Photo::findOrFail($id);
        $Photo->delete();
    
        return redirect()->route('medias.index');
    }

    public function store(Request $request){
        //$Photo = Photo::findOrFail(1);


        $file = $request->file('file');
        $name = time().$file->getClientOriginalName();
        $file->move('images', $name);

        $Photo = Photo::create(
            [
                'file' => $name,
                'imageable_id' => 0,
                'imageable_type' => 'Upload'
            ]
            );

        return redirect()->route('medias.index');
    }

    public function update(Request $request, $id){

        $Photo = Photo::findOrFail($id);

        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $file->move('images', $name);

        $Photo->update(
            [
                'file' => $name
            ]
            );

        return redirect()->route('medias.index');
    }




}
