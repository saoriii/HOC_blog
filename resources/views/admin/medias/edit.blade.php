@extends('layouts/layoutBack')

@section('content')

<header><a href="{{route('medias.index')}}">Accueil</a></header>

{!! Form::model($Photo, ['method' => 'PATCH', 'action' => ['AdminMediasController@update', $Photo->id], 'files' => true]) !!}

    <img src="/images/{{$Photo->file}}" />
    {!! Form::file('file', null) !!}
    {!! Form::submit("Enregister l'image") !!}

{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'action' => ['AdminMediasController@destroy', $Photo->id]]) !!}

    {!! Form::submit("Supprimer l'image") !!}

{!! Form::close() !!}



@stop