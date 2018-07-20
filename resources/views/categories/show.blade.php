@extends('layouts.app')

@section("content")

    {{$Category->name}}
<ul>
@foreach($Category->posts as $post)
   <li><a href="{{route('visiteurs.posts.show', $post->id)}}">{{$post->title}}</a> {{$post->user->name}} {{$post->created_at}}</li>

@endforeach
</ul>

@stop 