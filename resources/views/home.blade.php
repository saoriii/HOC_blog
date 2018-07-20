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

<ul class="collapsible popout">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Article récent</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Lieux</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Hot</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
@endsection


@section("scripts")
<script>
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible ').collapsible();
  });
</script> 

@stop