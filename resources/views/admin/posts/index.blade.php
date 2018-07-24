@extends('layouts.layoutBack')

@section('css')
    <!-- icheck checkboxes -->
    <link rel="stylesheet" href="{{ asset('icheck/square/yellow.css') }}">
@stop

@section('content')
	<ol class="breadcrumb">
        <li class="active">
            <i class="fa fa-file-text"></i> Posts
        </li>
    </ol>
	<ul class="nav navbar-nav">
        <li><a href="{{ route('posts.index') }}">View All Posts</a></li>
        <li><a href="{{ route('posts.create') }}">Create a Post</a>
    </ul>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All the current Posts
                </div><!-- /. panel-heading -->

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="posts_table" style="visibility:hidden;">
                        <thead>
                            <tr>
                                <th valign="middle">ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Content html</th>
                                <th>Image</th>
                                <th>Published?</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($posts as $post)
                                <tr class="@if($post->is_published) warning @endif">
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>{{ substr($post->content_html, 0, 50) }} [...]</td>
                                    @if ($post->image_path)
                                       <td><img src="{{ asset($post->image_path) }}" height="40" width="120" /></td>
                                    @else
                                        <td>No image</td>
                                    @endif
                                    <td class="text-center"><input type="checkbox" class="published" data-id="{{$post->id}}" @if ($post->is_published) checked @endif></td>
                                    <td>{{ $post->created_at }}</td>
                                    <td style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                        {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'POST', 'id' => 'postForm' )) !!}
                                            <a class="btn btn-small btn-success" href="{{ URL::to('admin/posts/' . $post->id) }}" style="margin: 5px;">Show this Post</a>
                                            <a class="btn btn-small btn-info" href="{{ URL::to('admin/posts/' . $post->id . '/edit') }}" style="margin: 5px;">Edit this Post</a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                            <input class="btn btn-small btn-warning" value="Delete this post" style="margin: 5px;" type="submit">
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /. panel-body -->
            </div><!-- /. panel panel-heading -->
        </div><!-- /. col-lg-12 -->
    </div><!-- /. row -->
@stop



@section('scripts')
    <script>
        $(window).load(function(){
            $('#posts_table').removeAttr('style');
        })
    </script>
 
@stop