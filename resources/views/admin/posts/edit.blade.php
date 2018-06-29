@extends("layouts.app")

@section("content")

    {!! Form::model($Post, ["method" => "PATCH", "action" => ["AdminPostController@update", $Post->id ]]) !!}

        {!! Form::label("title", "Titre") !!}
        {!! Form::text("title", null) !!}<br />

        {!! Form::label("content", "Contenu") !!}
        {!! Form::textarea("content", null) !!}<br />

        {!! Form::label("is_active", "Affichage") !!}
        {!! Form::select("is_active", ["0" => "Inactif", "1" => "Actif"], null) !!}<br />

        {!! Form::submit("Valider") !!}

    {!! Form::close() !!}

    {!! Form::open(["method" => "DELETE", "action" => ["AdminPostController@destroy", $Post->id]]) !!}

        {!! Form::submit("Supprimer") !!}

    {!! Form::close() !!}







    @stop