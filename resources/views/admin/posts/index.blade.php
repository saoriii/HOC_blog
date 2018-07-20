@extends('layouts.app')

@section('content')


<header><a class="waves-effect waves-light btn" href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

<ul>
    @foreach($posts as $post)
  
         <li><a class="waves-effect waves-light btn" href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>

    @endforeach


</ul>

<p><a class="btn-floating btn-large cyan pulse" href="{{route('posts.create')}}"><i class="material-icons">edit</i></a></p>








@stop