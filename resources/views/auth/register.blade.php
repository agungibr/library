@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                </div>

                <form method="POST" action="{{ route('register') }}">
                @csrf

                    <div class="form-group row mb-3">
                        <div class="col-sm-12 mb-6 mb-sm-0">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required autocomplete="new-password">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">{{ __('Register') }}</button>
                </form>

                <hr>
                <div class="text-center">
                    <a class="small" href="#">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Already have an account? Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection