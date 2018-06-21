<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMediasController extends Controller
{
    public function index() {
        return("admin.medias.index");
    }

    public function edit($id){
        return("admin.medias.edit");
    }

    public function upload() {
        return("admin.medias.upload");
    }

    public function destroy($id){

    }

    public function store(Request $request, $id){

    }

    public function update(Request $request, $id){

    }




}
