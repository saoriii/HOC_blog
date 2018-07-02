@extends('layouts.app')

@section('content')

    <header><a href="{{route('categories.index')}}">Accueil</a></header>

    {!! Form::open(['method' => 'POST', 'action' => ['AdminCategoriesController@store']]) !!}

    {!! Form::label('name', 'Nom') !!}

    {!! Form::text('name', null)!!} <br />

    {!! Form::submit('Créer la catégorie') !!}






    {!! Form::close() !!}


    @stop