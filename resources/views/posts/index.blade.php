@extends('layouts.app')

@section('content')

<a href="{{route('visiteurs.categories.index')}}">Catégories</a>
<a href="{{route('dashboard')}}">Admin</a>

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

<ul class="pagination center-pagi">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
@stop