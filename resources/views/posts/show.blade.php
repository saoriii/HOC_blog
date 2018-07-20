@extends('layouts.app')

@section('content')

<header><a href="{{route('visiteurs.posts.index')}}">Accueil</a></header>

<p>{{$Post->title}}</p>

@foreach ($Post->photos as $photo)

<img src='/images/{{$photo->file}}' />
@endforeach

<p>{{$Post->created_at}}</p>

<p>{{$Post->content}}</p>

<p>Catégorie : {{$Post->category->name}}</p>

<p>Auteur : {{$Post->user->name}}</p>

    <p>Commentaires :</p>


{{-- Affiche les commentaires avec is_active à 0 sinon n'affiche rien --}}
@foreach($Post->comments as $comment)

    @if($comment->is_active == 1)

    {{$comment->author}} <br />
    {{$comment->content}} <br />


    @else

    {{-- n'affiche rien --}}

    @endif
@endforeach

{!! Form::open(['method' => 'POST', 'action' => ['PostsController@comments', $Post->id]]) !!}

    {!! Form::label('author', 'Auteur') !!}
    {!! Form::text('author', null) !!}

    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null) !!}

    {!! Form::label('content', 'Message') !!}
    {!! Form::textarea('content', null) !!}

    {!! Form::submit('Envoyer mon commentaire') !!}

{!! Form::close() !!}

@stop