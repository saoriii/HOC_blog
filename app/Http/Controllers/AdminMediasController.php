<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMediasController extends Controller
{
    public function index() {
        return("admin.medias.index");
    }

    public function edit(){
        return("admin.medias.edit");
    }

    public function upload() {
        return("admin.medias.upload");
    }

    public function delete(){
        return("admin.medias.delete");
    }





}
