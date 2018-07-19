@extends('layouts.app')

@section('content')

    <header><a href="{{route('posts.index')}}">Accueil</a></header>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true]) !!}

    {!! Form::label("title", "Titre") !!}
    {!! Form::text("title", null) !!}<br />

    {!! Form::label("content", "Contenu") !!}
    {!! Form::textarea("content", null) !!}<br />

    {!! Form::label("is_active", "Affichage") !!}
    {!! Form::select("is_active", ["0" => "Inactif", "1" => "Actif"]) !!}<br />

    {!! Form::label("category_id", "Categorie") !!}
    {!! Form::select("category_id", $plucked) !!}

    {!! Form::file('file', null) !!}

    {!! Form::submit("Envoyer") !!}

    {!! Form::close() !!}


    @include("includes.errors")

@stop