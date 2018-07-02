@extends('layouts.app')

@section('content')

    <p><a href="{{route('posts.index')}}">Gérer les posts</a></p>
    <p><a href="{{route('categories.index')}}">Gérer les catégories</a></p>
    <p><a href="{{route('users.index')}}">Gérer les utilisateurs</a></p>
    <p><a href="{{route('comments.index')}}">Gérer les commentaires</a></p>
    <p><a href="{{route('medias.index')}}">Gérer les photos</a></p>

@stop
