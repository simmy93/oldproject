@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Prisijungimas</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">El. pašto adresas</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Slaptažodis</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Prisiminti mane
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Prisijungti
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Pamiršai slaptažodį?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div "col-md-6 col-md-offset-4">
                                <a class="btn btn-block btn-social btn-facebook" >
            <span class="fa fa-facebook"></span> Sign in with Facebook
          </a>           
                <a class="btn btn-block btn-social btn-google" >
            <span class="fa fa-google"></span> Sign in with Google
          </a>
          <a class="btn btn-block btn-social btn-twitter" >
            <span class="fa fa-twitter"></span> Sign in with Twitter
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
