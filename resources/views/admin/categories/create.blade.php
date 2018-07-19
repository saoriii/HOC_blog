@extends('layouts.app')

@section('content')

    <header><a href="{{route('categories.index')}}">Accueil</a></header>

    {!! Form::open(['method' => 'POST', 'action' => ['AdminCategoriesController@store'], 'files' => true]) !!}

    {!! Form::label('name', 'Nom') !!}

    {!! Form::text('name', null)!!} <br />

    {!! Form::file('file', null) !!}

    {!! Form::submit('Créer la catégorie') !!}






    {!! Form::close() !!}


    @stop