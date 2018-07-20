@extends('layouts.app')

@section('content')

    <header><a class="waves-effect waves-light btn" href="{{route('posts.index')}}">Accueil</a></header>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store']) !!}

    {!! Form::label("title", "Titre") !!}
    {!! Form::text("title", null) !!}<br />

    {!! Form::label("content", "Contenu") !!}
    {!! Form::textarea("content", null) !!}<br />

    
    
    {!! Form::label("is_active", "Affichage") !!}
    {!! Form::select("is_active", [0 => "Inactif", 1 => "Actif"]) !!}

    {!! Form::label("category_id", "Categorie") !!}
    {!! Form::select("category_id", $plucked) !!}

    <button class="waves-effect waves-light btn">{!! Form::submit("Envoyer") !!}</button>

    {!! Form::close() !!}


    @include("includes.errors")
@stop

@section('scripts')

<script>
$(document).ready(function() {
    $('select').material_select();
});
</script>
@stop