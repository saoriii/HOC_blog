@extends('layouts.app')

@section('content')

{!! Form::model($User, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $User->id], 'files' => true]) !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null) !!}

    {!! Form::label('password', 'Mot de passe') !!}
    {!! Form::text('password', null) !!}

    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null) !!}

    {!! Form::label('is_active', 'Affichage') !!}
    {!! Form::select('is_active', ['0' => 'Inactif', '1' => 'Actif'], null) !!}

    {!! Form::file('file', null) !!}

    {!! Form::submit("Mettre à jour") !!}

{!! Form::close() !!}




@stop

