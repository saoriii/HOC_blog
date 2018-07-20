@extends('layouts.app')

@section('content')

    <header><a class="waves-effect waves-light btn" href="{{route('dashboard')}}">TABLEAU DE BORD</a></header>

    <ul>
     @foreach($categories as $category)

            <li> <a  href="{{route('categories.show', $category->id)}}">{{$category->name}} </a> </li>




     @endforeach
    </ul>

    <p><a class="waves-effect waves-light btn" href="{{route('categories.create')}}">Créer une catégorie</a></p>


@stop