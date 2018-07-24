@extends('layouts/layoutFront')

@section('title', 'Homepage')

@section('content')

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Page Heading
            <small>Secondary Text</small>
        </h1>
        
        <!-- Blog post retrieved from DB -->
        @foreach ($Posts as $Post)

            @if($Post->is_active == 0)
                <h2>
                    <a href="{{route('visiteurs.posts.show', $Post->id )}}">{{ $Post->title }}</a>
                </h2>

                <p class="lead">
                    by <a href="{{ route('users.show', $Post->user->id)}}">{{ $Post->user->name }}</a>
                    <a href="{{ route('categories.show', $Post->category->id) }}" ><span class="badge" style="background-color: blue; vertical-align: 25%;">{{ $Post->category->name }}</span></a>

                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $Post->created_at->format('F d, Y \a\t g:i A') }}</p>
                <hr>
                @if (!empty($Post->photos()->first()->file))
                    <img src="images/{{ $Post->photos()->first()->file }}" alt="">
                    <hr>
                @endif

                <a class="btn btn-primary" href="{{route('visiteurs.posts.show', $Post->id )}}">Lire</a>
                <hr>

            @else

            @endif

        @endforeach

    </div><!-- /. col-md-8 -->
	
	
	<!-- Recherche -->
            <div class="col-md-4">

                <div class="well">
                    <h4>Rechercher</h4>
                    {!! Form::open(['method'=>'GET','url'=>'search','class'=>'','role'=>'search'])  !!} 
                        <div class="input-group">
                            {!! Form::text('search', isset($query) ? $query : NULL, array('class' => 'form-control', 'placeholder' => 'Search...')) !!}
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    {!! Form::close() !!}
                </div><!-- /. well -->

                <!-- Catégories -->
                <div class="well">
                    <h4>Catégories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($Categories as $cat)
                                <span style="margin:5px 10px 5px 0px; display: inline-block;"><a href="{{route('categories.show', $cat->id)}}" style=""><span class="badge" style="padding: 5px 10px; background: blue">{{ $cat->name }}</span></a></span>
                            @endforeach
                        </div>
                        <br/>
                    </div><!-- /. row -->
                </div><!-- /. well -->
            </div><!-- /. col-md-4 -->

@stop<!-- /. section content -->