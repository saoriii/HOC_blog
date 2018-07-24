@extends('layouts.layoutBack')

@section('content')

<header><a href="{{route('comments.index')}}">Accueil</a></header>

{!! Form::model($Comment, ['method' => 'PATCH', 'action' => ['AdminCommentsController@update', $Comment->id]]) !!}

    {!! Form::label('content', 'Contenu') !!}
    {!! Form::textarea('content', null,['class' => 'form-control']) !!}<br />

    {!! Form::label('author', 'Auteur') !!}
    {!! Form::text('author', null,['class' => 'form-control']) !!}<br />

    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}<br />

    {!! Form::label('is_active', 'Affichage') !!}
    {!! Form::select('is_active', ['0' => 'Inactif', '1' => 'Actif'], null, ['class' => 'form-control form-control-sm']) !!}<br />

    {!! Form::submit('Mettre à jour') !!}

{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'action' => ['AdminCommentsController@destroy', $Comment->id]]) !!}

{!! Form::submit('Supprimer') !!}

{!! Form::close() !!}

<p>Article associé</p>

<p>{{$Comment->post->title}}</p>
<p>{{$Comment->post->content}}</p>

@stop