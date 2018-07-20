@extends("layouts.app")


@section('content')

<header><a class="waves-effect waves-light btn" href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

<ul>
    @foreach($users as $user)
    <li><a class="waves-effect waves-light btn" href="{{route('users.show', $user->id)}}">{{$user->name}}</a></li>
    @endforeach
</ul>

    <p><a class="waves-effect waves-light btn" href="{{route('users.create')}}">Créer un utilisateur</a></p>

    @stop