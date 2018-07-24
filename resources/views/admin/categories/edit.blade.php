@extends('layouts/layoutBack')

@section('content')

    <header><a href="{{route('categories.index')}}">Accueil</a></header>

    {!! Form::model($Category, ['method'=> "PATCH", 'action'=> ["AdminCategoriesController@update", $Category->id], 'files' => true]) !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null) !!}

    {!! Form::submit('Mettre à jour') !!}

    {!! Form::file('file', null) !!}

    {!! Form::close() !!}




    {!! Form::open(['method'=> "DELETE", 'action'=> ["AdminCategoriesController@destroy", $Category->id]]) !!}

    {!! Form::submit('Supprimer') !!}

    {!! Form::close() !!}






@stop