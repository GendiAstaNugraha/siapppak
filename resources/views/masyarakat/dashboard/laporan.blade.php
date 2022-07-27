@extends('layouts.masyarakat')

@section('content')
<nav class="navbar bg-white m-3 mx-5 rounded-5">
    <div class="container-fluid">
        <div class="d-flex mx-4">
            <img src="{{ asset('images/surabaya.png') }}" alt="{{ __('surabaya') }}" height="40px" class="navbar-brand">
            <a class="navbar-brand">SiapPpak!</a>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari No Laporan Anda" aria-label="Search">
            <button class="btn btn-outline-success rounded-5" type="submit">Cari</button>
        </form>
    </div>
</nav>

<div class="card p-3 m-5">
    <div class="card-body">
        <h5 class="card-title mb-5">Laporan Anda</h5>
        <table class="table align-items-center mb-0 table-borderless">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Laporan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Dan Waktu</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>
                        <h6 class="mb-0 ms-2 text-sm">{{ $no++ }}</h6>
                    </td>
                    <td>
                        <h6 class="mb-0 ms-5 text-sm">{{ $item->id }}</h6>
                    </td>
                    <td>
                        <h6 class="mb-0 text-sm">{{ $item->created_at }}</h6>
                    </td>
                    <td>
                        @if ( $item->masalah == 'banyak' )
                        <h6 class="text-center mb-0 text-sm bg-success rounded-5 me-5 py-3" style="color: white;">Diterima</h6>
                        @elseif ($item->masalah == 'sedikit' )
                        <h6 class="text-center mb-0 text-sm bg-warning rounded-5 me-5 py-3" style="color: white;">Diproses</h6>
                        @elseif ($item->masalah == 'lumayan' )
                        <h6 class="text-center mb-0 text-sm bg-danger rounded-5 me-5 py-3" style="color: white;">Ditolak</h6>
                        @else
                        <h6 class="text-center mb-0 text-sm bg-dark rounded-5 me-5 py-3" style="color: white;">Ditutup</h6>
                        @endif
                        
                    </td>
                    <td class="d-flex pt-4">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-2" data-toggle="tooltip" data-original-title="Edit item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                              </svg>
                            Lihat
                        </a>
                        <a href="/admin/admin/delete/{{ $item->id }}" onclick="return confirm('Are you sure?')" class=" text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card p-3 m-5">
    <div class="card-body">
        <h5 class="card-title mb-5">Tambah Laporan</h5>
        <form method="POST" action="{{ route('lapor') }}">
            @csrf

            <div class="mb-3">
                <label for="masalah">Uraian Singkat Permasalah</label>
                <input id="masalah" type="hidden" class="form-control @error('masalah') is-invalid @enderror" name="masalah" value="{{ old('masalah') }}"required>
                <trix-editor input="masalah"></trix-editor>
                @error('masalah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 row">
                <h6 class="col">Apakah laporan anda sudah sesuai dengan fakta dilapangan dan dapat di pertanggung jawabkan?</h6>
                <div class="col d-flex">
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="fakta" id="fakta1" value="ya" checked required>
                        <label class="form-check-label" for="fakta1">
                            Ya
                        </label>
                    </div>
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="fakta" id="fakta2" value="tidak" required>
                        <label class="form-check-label" for="fakta2">
                            Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <h6 class="col">Apakah bersedia menerima pendamping dari petugas?</h6>
                <div class="col d-flex">
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="pendamping" id="pendamping1" value="ya" checked required>
                        <label class="form-check-label" for="pendamping1">
                            Ya
                        </label>
                    </div>
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="pendamping" id="pendamping2" value="tidak" required>
                        <label class="form-check-label" for="pendamping2">
                            Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3  col-md-10">
                <div class="captcha">
                    <span>{!! captcha_img('flat') !!}</span>
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                        Reload Captcha
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <input placeholder="Confirm Captcha" aria-label="Confirm Captcha" id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" required>
                @error('captcha')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 d-flex">
                <input type="hidden" value="{{ Auth::user()->id }}" name="id_user">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
    </div>

    </form>
</div>
<div class="footer text-center mt-2">
    <p class="text-muted">
        "Identitas anda sebagai pelapor atau terlapor dijamin kerahasiaannya"
    </p>
</div>
</div>
@endsection
