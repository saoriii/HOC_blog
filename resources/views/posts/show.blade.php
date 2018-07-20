@extends('layouts.app')

@section('content')

{{$Post->title}}

{{$Post->content}}
 <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="http://www.housingeurope.eu/site/theme/_assets/img/type-article.png">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
@stop