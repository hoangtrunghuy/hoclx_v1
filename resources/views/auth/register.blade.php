@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading" style="text-align: center; font-size: 20px;">
                    <a class="" href="{{ url('/') }}">
                        <img src="client/images/icons/logo.png" width="200px">
                    </a>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">FirstName</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="user_firstName" value="{{ old('user_firstName') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">LastName</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="user_lastName" value="{{ old('user_lastName') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Birth day</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="user_birth" value="{{ old('user_birth') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="user_adress" value="{{ old('user_adress') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                 <a class="btn btn-link" href="{{ route('login') }}">
                                    Login now
                                </a>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
