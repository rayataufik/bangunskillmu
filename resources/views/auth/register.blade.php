@extends('layouts.template.navbar')
<div class="container mx-auto h-100vh">
    <div class="row align-items-center justify-content-center h-100">
        <div class="col w-320px">
            <a href="{{ url('/') }}" class="d-flex no-underline back">
                <i class='bx bx-left-arrow-alt bx-md'></i>
                <span class="mt-2">Kembali</span>
            </a>
            <h1 class="sign-in h3 font-weight-bold mt-4 pt-1">
                Register
            </h1>
            <p class="text secondary h8 mt-1 mb-1">Learn or Create to Make Money.</p>
            <form>
                <div class="form-group mt-3">
                    <label>Nama</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class='bx bxs-user'></i></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nama lengkap">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class='bx bxs-bookmark-alt'></i></div>
                        </div>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Email Address">
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
                <button type="submit" class="btn login-btn m-0 btn-block">Register</button>
                <p class="mt-3">Sudah Punya akun? <a href="{{ url('/login') }}">Login</a></p>
            </form>
        </div>
    </div>
</div>
{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
