@extends("layouts.app")


@section('content')

<header><a href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

<ul>
    @foreach($users as $user)
    <li><a href="{{route('users.show', $user->id)}}">{{$user->name}}</a></li>
    @endforeach
</ul>

    <p><a href="{{route('users.create')}}">Créer un utilisateur</a></p>

    @stop