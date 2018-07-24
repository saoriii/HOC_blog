@extends('layouts.layoutBack')

@section('content')
	<ol class="breadcrumb">
        <li>
            <i class="fa fa-users"></i>  <a href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="active">
            <i class="fa fa-eye"></i> Show
        </li>
    </ol>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4>{{$User->name}}</h4>
                </div><!-- /. panel-heading -->

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="users_table">
                        <thead>
                            <tr>
                                <th valign="middle">Avatar</th>
                                <th>Email</th>
                                <th>Nom</th>
                                <th>Créé le</th>
                                <th>Articles</th>
                            </tr>
                        </thead>
	
                        <tbody>
                                <tr>
                                    <td>@foreach ($User->photos as $photo)
					<img src='/images/{{$photo->file}}' style='width:50px; height: 50px;'/>
					@endforeach</td>

                                    <td>{{ $User->email }}</td>
                                    <td>{{ $User->name }}</td>
                                    <td>{{ $User->created_at }}</td>
                                    <td>@foreach ($User->posts as $post)
                                    <a href="{{route('posts.show', $post->id)}}">{{$post->title }}</a>
                                    @endforeach</td>
                                </tr>
                        </tbody>
                    </table>
                </div><!-- /. panel-body -->
            </div><!-- /. panel panel-default -->
        </div><!-- /. col-lg-12 -->
    </div><!-- /. row -->
@stop