@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://img.freepik.com/free-vector/sedan-car-concept-illustration_114360-16463.jpg?w=740&t=st=1701840189~exp=1701840789~hmac=0b01e26a03945dccd220783e0f1ea87020723d30e06b0ee25d34f2ac0feb038e"
              class="img-fluid" alt="Sample image" width="auto">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form method="POST" action="{{ route('register') }}">
                  @csrf
              <!-- nama -->
              <input id="role" hidden value="Member" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>

              <div class="row mb-4">
                  <label for="nama" class="col-md-4 col-form-label text-md-start">{{ __('Nama') }}</label>

                  <div class="col-md-6">
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                      @error('nama')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <!-- alamat -->
              <div class="row mb-3">
                  <label for="alamat" class="col-md-4 col-form-label text-md-start">{{ __('Alamat') }}</label>

                  <div class="col-md-6">
                      <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                      @error('alamat')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <!-- notelp -->
              <div class="row mb-3">
                  <label for="notelp" class="col-md-4 col-form-label text-md-start">{{ __('Nomor Telepon') }}</label>

                  <div class="col-md-6">
                      <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') }}" required autocomplete="notelp" autofocus>

                      @error('notelp')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

                <!-- nosim -->
              <div class="row mb-3">
                  <label for="nosim" class="col-md-4 col-form-label text-md-start">{{ __('Nomor Sim') }}</label>

                              <div class="col-md-6">
                                  <input id="nosim" type="text" class="form-control @error('nosim') is-invalid @enderror" name="nosim" value="{{ old('nosim') }}" required autocomplete="nosim" autofocus>

                                  @error('nosim')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
              </div>

                <!-- email -->
              <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                </div>

                <!-- Password input -->
              <div class="row mb-3">
                  <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-start  ">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="text-center text-lg-center mt-4 pt-2">
                    <button type="submit" class="btn btn-primary button">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
