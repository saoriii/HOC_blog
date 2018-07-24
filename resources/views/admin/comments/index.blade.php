@extends('layouts.layoutBack')

@section('content')
	<ol class="breadcrumb">
        <li class="active">
            <i class="fa fa-comment"></i> Comments
        </li>
    </ol>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All the current Comments
                </div><!-- /. panel-heading -->

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="comments_post">
                        <thead>
                            <tr>
                                <th valign="middle">ID</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Published</td>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($Comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->author }}</td>
                                    <td>{{ substr($comment->content, 0, 50) }} [...]</td>
                                    @if ($comment->is_published)
                                    	<td class="success text-center">Yes</td>
                                    @else
                                    	<td class="danger text-center">No</td>
                                    @endif
                                    <td>{{ $comment->created_at }}</td>
                                    <td>
                                        <a class="btn btn-small btn-info" href="{{route('comments.edit', $comment->id)}}" style="margin: 5px;">Editer le commentaire</a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /. panel-body -->
            </div><!-- /. panel panel-default -->
        </div><!-- /. col-lg-12 -->
    </div><!-- /. row -->

    <!--  -->
@stop