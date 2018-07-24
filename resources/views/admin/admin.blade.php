@extends('layouts.layoutBack')

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12" style="">
            <h1 class="page-header">
                Panneau d'administration
            </h1>
            <div class="jumbotron">
  <h1 class="display-4">Bienvenue !</h1>
  <hr class="my-4">
  <p>Bienvenue sur le panneau d'administration de Tareq, Faresse, Coralie et Camille.</p>
</div
            
        </div>
    </div><!-- /.row -->

@stop
@section("scripts")

<script>

setTimeout(showPage, 2000);

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>


@stop