@extends('layouts/layoutBack')

@section('content')


    <ul>
     @foreach($categories as $category)

            <li> <a  href="{{route('categories.show', $category->id)}}">{{$category->name}} </a> </li>




     @endforeach
    </ul>

    <p><a class='form-control sm' href="{{route('categories.create')}}">Créer une catégorie</a></p>


@stop