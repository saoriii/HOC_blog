@extends("layouts.app")


@section('content')

<header><a class="waves-effect waves-light btn greyss" href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

<ul class="collection">
    @foreach($users as $user)
    <li class="collection-item avatar"><a href="{{route('users.show', $user->id)}}">{{$user->name}}</a>
    <img src="{{$user->photos()->first() ? $user->photos()->first()->file : 'http://via.placeholder.com/50x50'}}" alt="" class="circle">
    <a href="#!" class="secondary-content"><i class="material-icons ">grade</i></a>
    </li>
    @endforeach
</ul>

    <p><a class="waves-effect waves-light btn greyss" href="{{route('users.create')}}">Créer un utilisateur</a></p>

    @stop

