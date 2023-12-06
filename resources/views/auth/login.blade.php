@extends('layouts.app')

@section('content')

    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://img.freepik.com/free-vector/hybrid-car-concept-illustration_114360-8087.jpg?w=740&t=st=1701840802~exp=1701841402~hmac=be97c9ac9952f7a4f8e37280d273c131f2bf3b898ab7f8b8a16511840628d9b1"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Login</p>
                </div>

                <!-- Email input -->
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                <!-- Password input -->
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}} />
                    <label class="form-check-label" for="form2Example3">
                    Remember me
                    </label>
                </div>
                <a href="#!" class="text-body">Forgot password?</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary button">
                        {{ __('Login') }}
                    </button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                    class="link-danger">Register</a></p>
                </div>

            </form>
        </div>
      </div>
    </div>
@endsection
