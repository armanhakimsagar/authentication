@extends('layouts.app')

@section('content')

            <!-- /pages_agile_info_w3l -->

    <div class="pages_agile_info_w3l">
        <!-- /login -->
           <div class="over_lay_agile_pages_w3ls">
                <div class="registration">
            
                            <div class="signin-form profile">
                                <h2>Sign in Form</h2>
                                <div class="login-form">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">

                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            
                                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </div>



                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" name="password" placeholder="Password" required="">

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>


                                        </div>
                                        

                                        
                                        <div class="tp">
                                            <input type="submit" value="SIGN IN">
                                        </div>
                                        <div class="login-social-grids">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                        <p><a href="{{ url('register') }}"> Don't have an account?</a></p>
                                        <p><a href="http://localhost/auth/public/password/reset" class="btn btn-link">
                                                Forgot Your Password?
                                        </a></p>
                                    </form>
                                    </div>
                                
                            </div>
                    </div>
                    
        </div>
    </div>

@endsection
