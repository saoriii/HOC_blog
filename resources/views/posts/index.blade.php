@extends('layouts.app')

@section('content')

<a href="{{route('visiteurs.categories.index')}}">Catégories</a>
<a href="{{route('posts.index')}}">Admin</a>

<table>
    <th>
            <tr>
                <td style='font-weight:bold;'>Article</td>
                <td style='font-weight:bold;'>Catégorie</td>
                <td style='font-weight:bold;'>Auteur</td>
            </tr>
    </th>
    @foreach($Posts as $Post)
    <tr>
        @if($Post->is_active == 1)
        <td><a href="{{route('visiteurs.posts.show', $Post->id)}}">{{$Post->title}}</a></td> 
        <td>{{$Post->category->name}}</td> 
        <td>{{$Post->user->name}}</td>
        @else

        @endif
    </tr>
    @endforeach
</table>
@stop