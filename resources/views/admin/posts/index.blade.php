@extends('layouts.app')

@section('content')


<ul>
    @foreach($posts as $post)
         <li><a href="{{route('admin.posts.show', $Post->id)}}">{{$Post->title}}</a></li>
    @endforeach
</ul>







@stop