@extends('layouts.app')

@section('content')



@foreach($posts as $post)
{{$post->title}}
@endforeach






@stop