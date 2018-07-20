@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col s12 m6"> 
    @if (session('status'))
        <div class="card green darken-1">
            <div class="card-content white-text">
                {{ session('status') }}
            </div>
        </div>
    @endif
      <div class="card red lighten-2 cardif">
        <div class="card-content white-text cardif">
            <span class="card-title">Interface</span>
            Vous êtes connecté!
        </div>
      </div>
      <p><a class="waves-effect waves-light btn card" href="{{route('dashboard')}}">Menu</a></p>
    </div>
  </div>
</div>
@endsection