@extends('layouts.app')

@section('content')


	<div id="loader"></div>
	<div style="display:none;" id="myDiv" class="animate-bottom">

	    <p><a class="waves-effect waves-light btn greyss" href="{{route('posts.index')}}">Gérer les posts</a></p>
	    <p><a class="waves-effect waves-light btn greyss" href="{{route('categories.index')}}">Gérer les catégories</a></p>
	    <p><a class="waves-effect waves-light btn greyss" href="{{route('users.index')}}">Gérer les utilisateurs</a></p>
	    <p><a class="waves-effect waves-light btn greyss" href="{{route('comments.index')}}">Gérer les commentaires</a></p>
	    <p><a class="waves-effect waves-light btn greyss" href="{{route('medias.index')}}">Gérer les photos</a></p>
	    <p><a class="waves-effect waves-light btn greysss" href="{{route('posts.index')}}">Admin</a></p>

	</div>

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