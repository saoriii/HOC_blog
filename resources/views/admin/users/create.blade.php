@extends('layouts.app')

@section('content')

<header><a href="{{route('users.index')}}">Accueil</a></header>

{!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null) !!}

    {!! Form::label('password', 'Mot de passe') !!}
    {!! Form::text('password', null) !!}

    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null) !!}

    {!! Form::label('is_active', 'Affichage') !!}
    {!! Form::select('is_active', ['0' => 'Inactif', '1' => 'Actif']) !!}

    {!! Form::submit("Créer l'utilisateur") !!}

{!! Form::close() !!}




@stop