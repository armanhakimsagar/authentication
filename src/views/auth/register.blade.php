@extends('layouts.app')

@section('content')




<div class="pages_agile_info_w3l">
                            <!-- /login -->
       <div class="over_lay_agile_pages_w3ls two">
        <div class="registration">
        
                        <div class="signin-form profile">
                            <h2>Sign up Form</h2>
                            <div class="login-form">
                                <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        
                                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                    </div>


                                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <input id="email" type="email" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                            <input id="password" type="password" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                    </div>


                                     <div class="form-group">

                                        <input id="password-confirm" type="password" name="password_confirmation" required>

                                    </div>
    
                                    <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                </div>
                
    </div>
</div>


@endsection
