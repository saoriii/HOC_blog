@extends('layouts.layoutBack')

@section('content')
	<ol class="breadcrumb">
        <li>
            <i class="fa fa-users"></i>  <a href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="active">
            <i class="fa fa-plus-square"></i> Create
        </li>
    </ol>

    <div class="row">
		<div class="col-md-6 col-md-offset-3">
        {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => true]) !!}
			<h2 class="">Create a new User</h2>

			{!!Form::open(['route' => 'users.index', 'method' => 'POST', 'class' => 'clearfix']) !!}
				
                <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null) !!}
                </div>
                <div class="form-group">
                {!! Form::label('name', 'Nom') !!}
                {!! Form::text('name', null) !!}
                </div>
                <div class="form-group">
                {!! Form::label('password', 'Mot de passe') !!}
                {!! Form::text('password', null) !!}
                </div>

                {!! Form::file('file') !!}
                
                {!! Form::submit("Créer l'utilisateur") !!}

            {!!Form::close()!!}

	    </div><!-- /. col-md-6 -->
    </div><!-- /. row -->
@stop