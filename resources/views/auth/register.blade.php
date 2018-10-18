@extends('layouts.app')


@section('content')
                    
    <!-- signup-page -->
    <section id="main" class="clearfix user-page">
        <div class="container">
            <div class="row text-center">
                <!-- user-login -->         
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="user-account">
                        <h2>Create Your Account</h2>
                        @if ($errors->any())
                      <div class="alert alert-danger">
                            <ul>
                                 @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                 @endforeach
                            </ul>
                      </div>
                    @endif
                        <form method="POST" action="{{ url('/register') }}">
                            <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                 @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                    
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control"{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                    
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control"{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                    
                            </div>

                              <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        </div><!-- checkbox --> 
                            
                                <button type="submit" class="btn">
                                    {{__('Register') }}
                                </button>
                          
                        <input type="hidden" name="_token" value="{{ Session::token() }}">  
                        </form>
                        <!-- checkbox -->
                                        
                    </div>
                </div><!-- user-login -->           
            </div><!-- row -->  
        </div><!-- container -->
    </section><!-- signup-page -->
    
    @endsection