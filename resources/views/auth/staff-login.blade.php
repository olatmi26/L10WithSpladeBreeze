@extends('layouts.frontend.base')
@section('title', 'Login | ')
@section('content')

<section class="site-section bg-light aos-init aos-animate" data-aos="fade">
    <form action="{{ route('staff.login-attempt') }}" method="POST" class="p-5 bg-white">
        @csrf
        <div class="container">
            <div class="row mb-5 mx-auto">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3 site-color">Staff Sign In</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mx-auto pb-2">
                    <input id="phoneN0" type="tel" pattern="[0-9]*" inputmode="numeric" name="phoneN0"
                        class="form-control" value="{{ old('phoneN0') }}" required autocomplete="phoneN0" autofocus>
                    @error('phoneN0')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3 mx-auto">
                    {{-- <label class="text-black" for="password" src-only>Password</label> --}}
                    <input name="password" type="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-md-4 mb-3 mx-auto">
                    <input type="submit" value="Sign In" class="btn-block btn btn-primary btn-md text-white">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-9 mx-auto ">
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                        <div class="col-md-4 mx-auto">
                            @if (Route::has('staffRegister'))
                            Don't Have Profile
                            <a class="btn btn-link" href="{{ route('staffRegister') }}">
                                {{ __('Create now') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</section>

@endsection