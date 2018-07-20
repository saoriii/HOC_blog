
@extends('layouts.app')

@section('content')

    <header><a class="waves-effect waves-light btn" href="{{route('posts.index')}}">Accueil</a></header>
 <h1> {{$Post->title}}</h1>

@foreach ($Post->photos as $photo)

<img src='/images/{{$photo->file}}' />
@endforeach

 <p>{{$Post->content}}</p>

    <p>Rédigé par {{$Post->user->name}}</p>
    <p>Catégorie : {{$Post->category->name}}</p>

    <p><a class="waves-effect waves-light btn" href="{{route('posts.edit', $Post->id)}}">Modifier</a></p>

    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $Post->id]]) !!}

    <button class="waves-effect waves-light btn">{!! Form::submit('Supprimer') !!}</button>

    {!! Form::close() !!}

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





    @stop