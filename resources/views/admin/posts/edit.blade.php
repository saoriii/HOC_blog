@extends("layouts.app")

@section("content")


    <header><a href="{{route('posts.index')}}">Accueil</a></header>

    {!! Form::model($Post, ["method" => "PATCH", "action" => ["AdminPostsController@update", $Post->id ]]) !!}

        {!! Form::label("title", "Titre") !!}
        {!! Form::text("title", null) !!}<br />

        {!! Form::label("content", "Contenu") !!}
        {!! Form::textarea("content", null) !!}<br />

        {!! Form::label("is_active", "Affichage") !!}
        {!! Form::select("is_active", ["0" => "Inactif", "1" => "Actif"], null) !!}<br />

        {!! Form::label("category_id", "Categorie") !!}
        {!! Form::select("category_id", $plucked) !!}

        <button class="waves-effect waves-light btn">{!! Form::submit("Mettre à jour") !!}</button>

    {!! Form::close() !!}

    {!! Form::open(["method" => "DELETE", "action" => ["AdminPostsController@destroy", $Post->id]]) !!}

        <button class="waves-effect waves-light btn">{!! Form::submit("Supprimer") !!}</button>

    {!! Form::close() !!}



@include('includes.errors')



    @stop