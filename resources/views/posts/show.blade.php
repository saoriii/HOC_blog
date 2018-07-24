@extends('layouts.layoutFront')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/monokai-sublime.min.css">
    <style>
        /* update monokai-sublime.min.css for code display */
        .hljs {
                padding: 1em;
            }
    </style>
@stop

@section('content')
	<ol class="breadcrumb">
        <li>
            <i class="fa fa-file-text"></i> <a href="{{ route('visiteurs.posts.index') }}">Posts</a>
        </li>
        <li class="active">
            <i class="fa fa-eye"></i> Show
        </li>
    </ol>
   
    <!-- Blog post retrieved from DB -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h2>
                {{ $Post->title }}
            </h2>
            <p class="lead">
                by {{ $Post->user->name }}
        		<span class="badge" style="background-color: blue; vertical-align: 25%;">{{ $Post->category->name }}</span>

            </p>
            <p><span class="glyphicon glyphicon-time"></span> Created on {{ $Post->created_at->format('F d, Y \a\t g:i A') }}</p>
            <hr>
            @if (!empty($Post->photos()->first()))
                <img src="/images/{{ $Post->photos()->first()->file }}" alt="post image">
                <hr>
            @endif
            {{$Post->content}}
        </div><!-- /. col-md-6 -->
    </div><!-- /. row -->

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h4>Commentaires</h4>

                

                @foreach($Post->comments as $comment)

                    @if($comment->is_active == 1)
                        <p style='font-size:1em; font-weight: bold;'>{{$comment->author}}</p>
                        {{$comment->content}}
                        {{$comment->created_at}}
                    

                        @else

                        @endif

                 @endforeach


                {!! Form::open(['method' => 'POST', 'action' => ['PostsController@comments', $Post->id]]) !!}

                {!! Form::label('author', 'Auteur') !!}
                {!! Form::text('author',null, ['class' => 'form-control']) !!}<br />

                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!} <br />

                {!! Form::label('content', 'Message') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}<br />

                {!! Form::submit('Envoyer mon commentaire', ['class' => 'btn btn-default']) !!}

                {!! Form::close() !!}
        </div>
    </div>
@stop


	
	@section('scripts')
    <!-- highlight.js -->
    <script src="https://cdn.jsdelivr.net/highlight.js/latest/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
	
	@stop