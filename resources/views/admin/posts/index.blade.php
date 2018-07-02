@extends('layouts.app')

@section('content')

    <div style="text-align:center; margin-top: 200px;">

<p><a href="{{route('dashboard')}}">TABLEAU DE BORD</a></p>

<ul>
    @foreach($posts as $post)
        @if($post->is_active == 1)
         <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>

        @else

        @endif
    @endforeach


</ul>

<p><a href="{{route('posts.create')}}">Créer un post</a></p>


    </div>





@stop