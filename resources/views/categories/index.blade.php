@extends('layouts.app')

@section('content')

<ul>
@foreach($Categories as $cat)

<li><a href="{{route('visiteurs.categories.show', $cat->id)}}">{{$cat->name}}</a></li>

@endforeach
</ul>
@stop