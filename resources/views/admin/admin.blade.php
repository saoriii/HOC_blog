@extends('layouts.app')

@section('content')

    <p><a class="waves-effect waves-light btn cardiff" href="{{route('posts.index')}}">Gérer les posts</a></p>
    <p><a class="waves-effect waves-light btn greyss" href="{{route('categories.index')}}">Gérer les catégories</a></p>
    <p><a class="waves-effect waves-light btn greyss" href="{{route('users.index')}}">Gérer les utilisateurs</a></p>
    <p><a class="waves-effect waves-light btn coucou" href="{{route('comments.index')}}">Gérer les commentaires</a></p>
    <p><a class="waves-effect waves-light btn coucou" href="{{route('medias.index')}}">Gérer les photos</a></p>

@stop
