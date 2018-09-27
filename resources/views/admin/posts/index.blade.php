@extends('layouts.app')

@section('content')


<header><a class="waves-effect waves-light btn" href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

<ul style="display: flex; justify-content: space-around; flex-wrap: wrap; width: 80%; margin: auto;">
    @foreach($posts as $post)
  
         <li style="margin-top: 20px;"><a class="waves-effect waves-light btn" href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>

    @endforeach


</ul>

<p><a class="btn-floating btn-large cyan pulse" href="{{route('posts.create')}}"><i class="material-icons">edit</i></a></p>

<a href="https://i.imgur.com/8AU9W4K.jpg" data-lightbox="image-1" data-title="My caption">Image #1</a>







@stop