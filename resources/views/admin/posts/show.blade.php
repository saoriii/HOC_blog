@extends('layouts.layoutBack')


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
            <i class="fa fa-file-text"></i> <a href="{{ route('posts.index') }}">Posts</a>
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
@stop


	
	@section('scripts')
    <!-- highlight.js -->
    <script src="https://cdn.jsdelivr.net/highlight.js/latest/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
	
	@stop