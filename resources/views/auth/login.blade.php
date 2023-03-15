@extends('layouts.template.navbar')
<div class="container mx-auto h-100vh">
    <div class="row align-items-center justify-content-center h-100">
        <div class="col w-320px">
            <a href="{{ url('/') }}" class="d-flex no-underline back">
                <i class='bx bx-left-arrow-alt bx-md'></i>
                <span class="mt-2">Kembali</span>
            </a>
            <h1 class="sign-in h3 font-weight-bold mt-4 pt-1">
                Login
            </h1>
            <p class="text secondary h8 mt-1 mb-1">Masuk untuk melanjutkan belajar</p>
            <form>
                <div class="form-group mt-3">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class='bx bxs-bookmark-alt'></i></div>
                        </div>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class='bx bxs-lock-alt'></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
                </div>
                <button type="submit" class="btn login-btn m-0 btn-block">Login</button>
                <p class="mt-3">Tidak punya akun? <a href="register.html">Register</a></p>
            </form>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
