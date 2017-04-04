@extends('layouts.default')
    
    @section('content')
    <section id="hero" class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div id="login">
                            <div class="text-center"><img src="{{ asset('img/logo_sticky.png') }}" alt="Image" data-retina="true" ></div>
                            <hr>
                            
                            <div class="row">
                            <div class="col-md-6 col-sm-6 login_social">
                                <a href="{{ asset('login/facebook') }}" class="btn btn-primary btn-block"><i class="icon-facebook"></i> Facebook</a>
                            </div>
                 
                            </div> <!-- end row -->
                            <div class="login-or"><hr class="hr-or"><span class="span-or">or</span></div>
                            <form method="post" action="{{URL::route('post-login')}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group {{ ($errors->has('email')) ? 'has-error has-feedback'  :''}}" >
                                    <label>Email</label>
                                    <input type="text" class=" form-control " placeholder="Email" name="email" value="{{ old('email') }}" >
                                    @if($errors->has('email'))
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        <label id="email-error" class="error"
                                               for="email-error">{{ $errors->first('email') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class=" form-control" placeholder="Password" name="password" required>
                                </div>
                                <p class="small">
                                    <a href="{{ asset('/reset-password')}}">Forgot Password?</a>
                                </p>
                                <input  type="submit" class="btn_full" name="Sign_in" value="Sign in" >
                                <a href="{{URL::asset('/register')}} " class="btn_full_outline">Register</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
@stop