@extends('layouts.app')

@section('content')

{!! Form::model($User, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $User->id]]) !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null) !!}

    {!! Form::label('password', 'Mot de passe') !!}
    {!! Form::text('password', null) !!}

    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null) !!}

    {!! Form::label('is_active', 'Affichage') !!}
    {!! Form::select('is_active', ['0' => 'Inactif', '1' => 'Actif']) !!}

    {!! Form::submit("Mettre à jour") !!}

{!! Form::close() !!}




@stop

