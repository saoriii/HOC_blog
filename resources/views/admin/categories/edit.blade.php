@extends('layouts.app')

@section('content')

    <header><a href="{{route('categories.index')}}">Accueil</a></header>

    {!! Form::model($Category, ['method'=> "PATCH", 'action'=> ["AdminCategoriesController@update", $Category->id]]) !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null) !!}

    {!! Form::submit('Mettre à jour') !!}

    {!! Form::close() !!}




    {!! Form::open(['method'=> "DELETE", 'action'=> ["AdminCategoriesController@destroy", $Category->id]]) !!}

    {!! Form::submit('Supprimer') !!}

    {!! Form::close() !!}






@stop