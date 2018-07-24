@extends('layouts/layoutBack')

@section('content')

    <header><a class="waves-effect waves-light btn" href="{{route('categories.index')}}">Accueil</a></header>

    {!! Form::open(['method' => 'POST', 'action' => ['AdminCategoriesController@store'], 'files' => true]) !!}

    {!! Form::label('name', 'Nom') !!}

    {!! Form::text('name', null)!!} <br />

    {!! Form::file('file', null) !!}

    {!! Form::submit('Créer la catégorie') !!}






    {!! Form::close() !!}


    @stop