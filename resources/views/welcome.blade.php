@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
              @if (Auth::check())
                <div class="panel-body"> Udah Login </div>

              @else
              <div class="panel-heading">Register</div>

              <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/quick-register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    --}}
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>Register
                            </button>
                        </div>
                    </div>
                </form>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Sign In</div>

              <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                      {!! csrf_field() !!}

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label class="col-md-4 control-label">E-Mail Address</label>

                          <div class="col-md-6">
                              <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">
                              <input type="password" class="form-control" name="password">

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
                                      <input type="checkbox" name="remember"> Remember Me
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-sign-in"></i>Login
                              </button>

                              <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>


          @endif
        </div>
    </div>
</div>
@endsection
