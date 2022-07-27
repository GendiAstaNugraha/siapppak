@extends('welcome')

@section('content')
<div class="container">
    <div class="row ">
        <div class="card rounded-5 border-0">
            <div class="card-body p-5">
                <h4 class="card-title mb-4">Daftar</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <input placeholder="Nama" aria-label="Nama" id="nama" type="text" class="form-control rounded-5 @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}"required>
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input placeholder="NIK" aria-label="NIK" id="nik" type="text" class="form-control rounded-5 @error('nik') is-invalid @enderror" value="{{ old('nik') }}" name="nik" required>
                        @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <h6 class="col">Warga Surabaya</h6>
                            <div class="col form-check">
                                <input class="form-check-input" type="radio" name="wsurabaya" id="wsurabaya1" value="ya" checked required>
                                <label class="form-check-label" for="wsurabaya1">
                                    Ya
                                </label>
                            </div>
                            <div class="col form-check">
                                <input class="form-check-input" type="radio" name="wsurabaya" id="wsurabaya2" value="tidak" required>
                                <label class="form-check-label" for="wsurabaya2">
                                    Tidak
                                </label>
                            </div>
                    </div>
                    <div class="mb-3">
                        <input placeholder="Alamat Domisili" aria-label="Alamat Domisili" id="alamat" type="text" class="form-control rounded-5" value="{{ old('alamat') }}" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <input placeholder="No Hp (WA/Telp)" aria-label="No Hp (WA/Telp)" id="nomor" type="text" class="form-control rounded-5 @error('nomor') is-invalid @enderror" value="{{ old('nomor') }}" name="nomor" required>
                        @error('nomor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
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

                    <div class="mb-3">
                            <input placeholder="Ulangi Password" aria-label="Confirm Password" id="password-confirm" type="password" class="form-control rounded-5" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="mb-3">
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
                    <div class="col">
                        <button type="submit" class="btn btn-primary rounded-5">
                            {{ __('Daftar') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer bg-transparent">
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="font-weight-bolder">Sign in</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
