@extends('welcome')

@section('content')
<div class="container mt-3 mb-5">
    <div class="row ">
        <div class="card rounded-5 border-0">
            <div class="card-body p-5">
                <h4 class="card-title mb-4">Masuk</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                            <input placeholder="Email" aria-label="Email" id="email" type="email" class="form-control rounded-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="mb-3">
                            <input placeholder="Password" aria-label="Password" id="password" type="password" class="form-control rounded-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="mb-3  col-md-10">
                            <div class="captcha">
                                <span>{!! captcha_img('flat') !!}</span>
                                <button type="button" class="btn btn-danger rounded-5" class="reload" id="reload">
                                    &#x21bb;
                                    Ganti Captcha
                                </button>
                            </div>
                    </div>

                    <div class="mb-3">
                            <input placeholder="Masukkan Captcha" aria-label="Confirm Captcha" id="captcha" type="text" class="form-control rounded-5 @error('captcha') is-invalid @enderror" name="captcha" required>
                            @error('captcha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="col-md-10 d-flex">
                        <button type="submit" class="btn btn-primary me-3 rounded-5">
                            Masuk
                        </button>
                        @if (Route::has('password.request'))
                <a class="btn nav-link mt-1" href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
                @endif
                    </div>

                </form>
            </div>
            <div class="card-footer bg-transparent">
                <p class="text-sm mx-auto">
                    Belun Memiliki akun?
                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Daftar</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
