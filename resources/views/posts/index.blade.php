@extends('layouts.app')

@section('content')


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
        <td><a href="{{route('posts.show', $Post->id)}}">{{$Post->title}}</a></td> 
        <td>{{$Post->category->name}}</td> 
        <td>{{$Post->user->name}}</td>
    </tr>
    @endforeach
</table>

@stop