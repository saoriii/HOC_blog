@extends('layouts.layoutBack')

@section('content')
	<ol class="breadcrumb">
        <li>
            <i class="fa fa-users"></i>  <a href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="active">
            <i class="fa fa-pencil"></i> Edit
        </li>
    </ol>

    <div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<h2 class="">Edit {{ $User->name }}</h2>

			{!! Form::model($User, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $User->id], 'files' => true]) !!}
				
                <div class="form-group">
                {!! Form::label('name', 'Nom') !!}
                {!! Form::text('name', null) !!}
                </div>

                <div class="form-group">
                {!! Form::label('password', 'Mot de passe') !!}
                {!! Form::text('password', '') !!}
                </div>

                <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null) !!}
                </div>

                <div class="form-group">
                {!! Form::label('is_active', 'Affichage') !!}
                {!! Form::select('is_active', ['0' => 'Inactif', '1' => 'Actif'], null) !!}
                </div>

                
                {!! Form::file('file',['class' => 'btn btn-default'], null) !!}

                {!! Form::submit("Mettre à jour", ['class' => 'btn btn-default'] ) !!}
	            
	            <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>

	        {!!Form::close()!!}
		        
		</div><!-- /. col-md-6 -->
	</div><!-- /. row -->
@stop
