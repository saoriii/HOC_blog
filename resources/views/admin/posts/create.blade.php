@extends('layouts.app')

@section('content')
    <div style="text-align:center; margin-top: 200px;">
    <header><a href="{{route('posts.index')}}">Accueil</a></header>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store']) !!}

    {!! Form::label("title", "Titre") !!}
    {!! Form::text("title", null) !!}<br />

    {!! Form::label("content", "Contenu") !!}
    {!! Form::textarea("content", null) !!}<br />

    {!! Form::label("is_active", "Affichage") !!}
    {!! Form::select("is_active", ["0" => "Inactif", "1" => "Actif"]) !!}<br />

        {!! Form::label("category_id", "Categorie") !!}
        {!! Form::select("category_id", ["2" => "Cat"]) !!}

    {!! Form::submit("Envoyer") !!}

    {!! Form::close() !!}
    </div>

    @include("includes.errors")

@stop