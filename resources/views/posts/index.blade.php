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