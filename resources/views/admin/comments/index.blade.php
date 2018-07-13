@extends('layouts.app')

@section('content')

<header><a href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

<ul>
    @foreach($comments as $comment)
        <li><a href="{{route('posts.show', $comment->post->id)}}">{{$comment->post->title}}</a>
        {{$comment->content}}
        {{$comment->author}}
        {{$comment->email}}
        
        <a href="{{route('comments.edit', $comment->id)}}">Modifier</a></li>
        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCommentsController@destroy', $comment->id]]) !!}

            {!! Form::submit('Supprimer') !!}

        {!! Form::close() !!}

    @endforeach
</ul>


@stop