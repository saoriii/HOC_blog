@extends("layouts.app")

@section("content")

    <header><a href="{{route('categories.index')}}">Accueil</a></header>
    @foreach($Category->photos as $photo)

    <img src="/images/{{$photo->file}}"/> 
    @endforeach
 



    <p>{{$Category->name}}</p>

    <p>Articles : </p>
    <ul>
    @foreach($Category->posts as $post)
            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
    @endforeach
    </ul>

    <p><a href="{{route("categories.edit", $Category->id)}}">Modifier</a></p>

    {!! Form::open(["method" => "DELETE", "action" => ["AdminCategoriesController@destroy", $Category->id]]) !!}

        {!! Form::submit("Supprimer") !!}

    {!! Form::close()!!}

@stop