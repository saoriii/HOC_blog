@extends("layouts.app")

@section("content")

    <div style="text-align:center; margin-top: 200px;">
    <header><a href="{{route('posts.index')}}">Accueil</a></header>

    {!! Form::model($Post, ["method" => "PATCH", "action" => ["AdminPostsController@update", $Post->id ]]) !!}

        {!! Form::label("title", "Titre") !!}
        {!! Form::text("title", null) !!}<br />

        {!! Form::label("content", "Contenu") !!}
        {!! Form::textarea("content", null) !!}<br />

        {!! Form::label("is_active", "Affichage") !!}
        {!! Form::select("is_active", ["0" => "Inactif", "1" => "Actif"], null) !!}<br />

        {!! Form::label("category_id", "Categorie") !!}
        {!! Form::select("category_id", ["0" => "Cat"]) !!}

        {!! Form::submit("Mettre à jour") !!}

    {!! Form::close() !!}

    {!! Form::open(["method" => "DELETE", "action" => ["AdminPostsController@destroy", $Post->id]]) !!}

        {!! Form::submit("Supprimer") !!}

    {!! Form::close() !!}

    </div>

@include('includes.errors')



    @stop