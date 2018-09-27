@extends('layouts.app')

@section('content')

<header><a class="waves-effect waves-light btn greyss" href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>
<div class="flex2">
    <ul class="flex">
@foreach($Photos as $photo)


 <li>
<a href="{{route('medias.edit', $photo->id)}}"><img src="/images/{{$photo->file}}"/></a>
</li>


@endforeach
</ul>
</div>

{!! Form::open(['method' => 'POST', 'action' => 'AdminMediasController@store', 'files' => true]) !!}


{!! Form::file('file', null) !!}

<button class="waves-effect waves-light btn greyss">{!! Form::submit("Enregistrer l'image") !!}</button>


{!! Form::close() !!}



@stop 

@section("scripts")
<script>
// Or with jQuery

  $(document).ready(function(){
    $('.slider').slider();
  });
</script>
@stop