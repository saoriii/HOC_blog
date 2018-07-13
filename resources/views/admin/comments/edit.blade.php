@extends('layouts.app')

@section('content')

<header><a href="{{route('comments.index')}}">Accueil</a></header>

{!! Form::model($Comment, ['method' => 'PATCH', 'action' => ['AdminCommentsController@update', $Comment->id]]) !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', null) !!}

    {!! Form::label('author', 'Auteur') !!}
    {!! Form::text('author', null) !!}

    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null) !!}

    {!! Form::label('is_active', 'Affichage') !!}
    {!! Form::select('is_active', ['0' => 'Inactif', '1' => 'Actif'], null) !!}

    {!! Form::submit('Mettre à jour') !!}

{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'action' => ['AdminCommentsController@destroy', $Comment->id]]) !!}

{!! Form::submit('Supprimer') !!}

{!! Form::close() !!}

<p>Article associé</p>

{{$Comment->post->content}}

@stop