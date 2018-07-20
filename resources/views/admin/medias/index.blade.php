@extends('layouts.app')

@section('content')

<header><a class="waves-effect waves-light btn greyss" href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

@foreach($Photos as $photo)

<a href="{{route('medias.edit', $photo->id)}}"><img src="/images/{{$photo->file}}"/></a>

@endforeach

{!! Form::open(['method' => 'POST', 'action' => 'AdminMediasController@store', 'files' => true]) !!}

{!! Form::file('file', null) !!}

<button class="waves-effect waves-light btn greyss">{!! Form::submit("Enregistrer l'image") !!}</button>


{!! Form::close() !!}




@stop 

