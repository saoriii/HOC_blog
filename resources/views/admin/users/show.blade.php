@extends('layouts.app')

@section('content')

<header><a href="{{route('users.index')}}">Accueil</a></header>

{{$User->name}}

<p>Ses articles</p>
<ul>
    @foreach($User->posts as $post)
        <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
    @endforeach
</ul>

<a href="{{route('users.edit', $User->id)}}">Modifier</a>

{!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $User->id]]) !!}

    {!! Form::submit('Supprimer') !!}

{!! Form::close() !!}

@stop