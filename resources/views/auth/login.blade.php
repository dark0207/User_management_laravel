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
                
                <span class="input-symbol">
                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                </span>
            </div>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
            <div class="access-input validate-input" data-validate = "Password is required">
                <input class="login-input" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <span class="input-focus"></span>
                
                <span class="input-symbol">
                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                </span>
            </div>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
            
            <div class="">
                <button type="submit" class="btn btn-primary-light btn-block">Login</button>
            </div>
            <div class="text-center pt-3">
                <p class="mb-0">Not a member?<a href="{{ route('register.perform') }}" class="text-primary ml-1">Sign UP now</a></p>
            </div>
            @include('auth.partials.copy')
            
        </form>
    </div>
@endsection
