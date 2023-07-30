@extends('layouts.auth-master')

@section('content')
    <div class="access-container p-6">
        <form class="login-form validate-form" method="POST" action="{{ route('register.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
            <span class="login-form-title">
                Registration
            </span>
            <div class="access-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="login-input" type="text" name="email" value="{{ old('email') }}" placeholder="Email" required="required" autofocus>
                <span class="input-focus"></span>
                <span class="input-symbol">
                    <i class="mdi mdi-account" aria-hidden="true"></i>
                </span>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="access-input validate-input" data-validate = "Valid Username is required: ex@abc.xyz">
                <input class="login-input" type="text" name="username" value="{{ old('username') }}" placeholder="Username">
                <span class="input-focus"></span>
                <span class="input-symbol">
                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                </span>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="access-input validate-input" data-validate = "Password is required">
                <input class="login-input" type="password" name="password" value="{{ old('password') }}" placeholder="Password">
                <span class="input-focus"></span>
                <span class="input-symbol">
                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                </span>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="access-input validate-input" data-validate = "Confirm Password is required">
                <input class="login-input" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password">
                <span class="input-focus"></span>
                <span class="input-symbol">
                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                </span>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            {{-- <label class="custom-control custom-checkbox mt-4 mb-4">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
            </label> --}}
            <div class="">
                <button type="submit" class="btn btn-primary-light btn-block">Register</button>
            </div>
            <div class="text-center pt-3">
                <p class="mb-0">Already have account?<a href="{{ route('login.perform') }}" class="text-primary ml-1">Sign In</a></p>
            </div>
            {{-- <div class=" flex-c-m text-center mt-3">
                <p>Or</p>
                <div class="social-icons">
                    <ul>
                        <li><a class="btn  btn-social btn-block"><i class="fa fa-google-plus "></i> Sign up with Google</a></li>
                        <li><a class="btn  btn-social btn-block mt-2"><i class="fa fa-facebook"></i> Sign in with Facebook</a></li>
                    </ul>
                </div>
            </div> --}}
        </form>
    </div>
@endsection
