@extends('layouts.app')

@section('content')

<a href="{{route('visiteurs.categories.index')}}">Catégories</a>
<a href="{{route('dashboard')}}">Admin</a>


   <div style="display:flex; flex-flow: row wrap;">
    @foreach($Posts as $Post)
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" style='height:250px;' src="/images/{{$Post->photos()->first() ? $Post->photos()->first()->file : ""}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$Post->title}}</h5>
    <p class="card-text">{{str_limit($Post->content, 20)}}</p>
    <a href="{{route('visiteurs.posts.show', $Post->id)}}" class="btn btn-primary">Lisez-moi !</a>
  </div>
  </div>
@endforeach
    </div>

@stop