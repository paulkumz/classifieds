@extends('layouts.app')

@section('content')

    <!-- signin-page -->
    <section id="main" class="clearfix user-page">
        <div class="container">
            <div class="row text-center">
                <!-- user-login -->         
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="user-account">
                        <h2>User Login</h2>
                        <!-- form -->
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" class="form-control">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <button type="submit" class="btn">Login</button>
                        </form><!-- form -->
                    
                        <!-- forgot-password -->
                        <div class="user-option">
                            <div class="checkbox pull-left">
                                <label for="logged"><input type="checkbox" {{ old('remember') ? 'checked' : '' }} name="logged" id="logged"> Keep me logged in </label>
                            </div>
                            <div class="pull-right forgot-password">
                                <a href="{{ url('/password/reset') }}">Forgot password</a>
                            </div>
                        </div><!-- forgot-password -->
                    </div>
                    <a href="" class="btn-primary">Create a New Account</a>
                </div><!-- user-login -->           
            </div><!-- row -->  
        </div><!-- container -->
    </section><!-- signin-page -->
    
@endsection