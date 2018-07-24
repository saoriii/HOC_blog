@extends('layouts.layoutBack')

@section('content')
	<ol class="breadcrumb">
        <li class="active">
            <i class="fa fa-users"></i> Users
        </li>
    </ol>
	<ul class="nav navbar-nav">
        <li><a href="{{ route('users.index') }}">View All Users</a></li>
        <li><a href="{{ route('users.create') }}">Create a User</a>
    </ul>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All the current Users
                </div><!-- /. panel-heading -->

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="users_table">
                        <thead>
                            <tr>
                                <th valign="middle">Avatar</th>
                                <th>Email</th>
                                <th>Nom</th>
                                <th>Créé le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $user)
                                <tr>
                                <td>@foreach ($user->photos as $photo)
					            <img src='/images/{{$photo->file}}' style='width:50px; height: 50px;'/>
					                @endforeach</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                    	<form method="POST" action="{{ URL::to('admin/users/' . $user->id) }}" id="userForm" accept-charset="UTF-8">
                                            <a class="btn btn-small btn-success" href="{{ URL::to('admin/users/' . $user->id) }}" style="margin: 5px;">Voir l'utilisateur</a>
                                            <a class="btn btn-small btn-info" href="{{ URL::to('admin/users/' . $user->id . '/edit') }}" style="margin: 5px;">Modifier l'utilisateur</a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                            <input class="btn btn-small btn-warning" value="Supprimer l'utilisateur" style="margin: 5px;" type="submit">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /. panel-body -->
            </div><!-- /. panel panel-default -->
        </div><!-- /. col-lg-12 -->
    </div><!-- /. row -->
@stop

@section('scripts')
    <script>
        $('.btn-warning').click(function(e) {
            e.preventDefault(); // Prevent the href from redirecting directly
            form = $(this).closest('form');
            warnBeforeRedirect();
        });

        function warnBeforeRedirect() {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this user!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: false 
            },
            function(isConfirm) {
                if (isConfirm) {                        
                    form.submit();
                } else {
                    swal("Cancelled", "Your user is safe :)", "error");
                }
            });
        }
    </script>
@stop