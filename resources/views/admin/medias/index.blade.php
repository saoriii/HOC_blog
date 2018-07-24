@extends('layouts/layoutBack')

@section('content')


<div class="flex2">
    <ul style='display:flex; flex-wrap: wrap; justify-content: center;'>
@foreach($Photos as $photo)


 <li style='list-style-type:none;'>
<a href="{{route('medias.edit', $photo->id)}}"><img src="/images/{{$photo->file}}" style='width: 300px; height: 250px; margin: 10px;'/></a>
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