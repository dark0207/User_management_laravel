@extends('layouts.auth-master')

@section('content')
    <div class="access-container p-6">
        <form class="login-form validate-form" method="post" action="{{ route('login.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <span class="login-form-title">
                Member Login
            </span>

            @include('layouts.partials.messages')

            <div class="access-input validate-input" data-validate ="Valid email is required: ex@abc.xyz">
                <input class="login-input" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <span class="input-focus"></span>
                @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
                <span class="input-symbol">
                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                </span>
            </div>
            <div class="access-input validate-input" data-validate = "Password is required">
                <input class="login-input" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <span class="input-focus"></span>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
                <span class="input-symbol">
                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                </span>
            </div>
            {{-- <div class="text-right pt-3 pb-3">
                <p class="mb-0"><a href="forgot-password.html" class="text-primary ml-1">Forgot Password?</a></p>
            </div> --}}
            <div class="">
                <button type="submit" class="btn btn-primary-light btn-block">Login</button>
            </div>
            <div class="text-center pt-3">
                <p class="mb-0">Not a member?<a href="{{ route('register.perform') }}" class="text-primary ml-1">Sign UP now</a></p>
            </div>
            {{-- <div class=" flex-c-m text-center mt-3">
                <p>Or</p>
                <div class="social-icons">
                    <ul>
                        <li><a class="btn  btn-social btn-block"><i class="fa fa-google-plus"></i> Sign up with Google</a></li>
                        <li><a class="btn  btn-social btn-block mt-2"><i class="fa fa-facebook"></i> Sign in with Facebook</a></li>
                    </ul>
                </div>
            </div> --}}
            
            @include('auth.partials.copy')
            
        </form>
    </div>
@endsection
