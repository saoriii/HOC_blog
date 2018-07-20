@extends('layouts.app')
@section('css')
    <style>
        .row > .card {
          margin-top: 40px;  
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <form  method="POST" action="{{ route('password.email') }}"> 
                <div class="card-content">
                    {{ csrf_field() }}
                    @if (session('status'))
                        <div class="card green darken-1">
                            <div class="card-content white-text">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                    <span class="card-title">Reset Password</span>
                    <hr>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail</i>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'invalid' : '' }}" required autofocus>
                            <label for="email" data-error="{{ $errors->has('email') ? $errors->first('email'): '' }}">E-Mail Address</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Send Password Reset Link
                        <i class="material-icons right">lock_open</i>
                    </button>
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection