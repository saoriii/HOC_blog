@extends("layouts.app")


@section('content')

    @foreach($users as $user)
    {{$user->name}}
    @endforeach

    @stop