@extends('layouts.main')

@section('content')
    {{--  <!-- ======= Top Bar ======= -->  --}}
    <section class="d-flex align-items-center background-animate">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <h2 class="text-white">Selamat Datang {{ $user->nama }} !</h2>
        </div>
    </section>

    @if ($role == 'user')
        <main id="main">
            <section>
                @if ($koderuang)
                
                    <div class="container">
                        <div class="row">
                            <div class="container">
                                <div class="card">
                                    <div class="card-header text-white" style="color:white; background-color:#5CB874">
                                        Perhatian
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Anda sudah mendapatkan ruang untuk dihuni</h5>
                                        <h3 class="card-title" style="color:#5CB874">Kode ruang anda adalah :
                                            {{ $koderuang }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div> <br>

                        @if ($belumBayar)
                            <div class="row">
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header text-white bg-danger">
                                            Peringatan !
                                        </div>
                                        <div class="card-body text-danger">
                                            <h5 class="card-title">Anda belum melakukan pembayaran bulan ini</h5>
                                            <p class="card-text">Segera lakukan pembayaran sewa bulan ini, sekarang.</p>
                                            <a href="/pembayaran" class="btn"
                                                style="color:white; background-color:#5CB874">Pembayaran</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                        @endif

                        @if ($registerulang)
                            <div class="row">
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header text-white bg-danger">
                                            Peringatan !
                                        </div>
                                        <div class="card-body text-danger">
                                            <h5 class="card-title">Data diri anda belum lengkap</h5>
                                            <p class="card-text">Segera lengkapi data anda dengan melakukan registrasi ulang di bawah ini.</p>
                                            <a href="/register/edit" class="btn"
                                                style="color:white; background-color:#5CB874">Registrasi Ulang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                
                @else

                    <div class="container">
                        <div class="row">
                            <div class="container">
                                <div class="card">
                                    <div class="card-header text-white" style="background-color: #5CB874">
                                        Perhatian
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Anda belum menyewa ruang</h5>
                                        <p class="card-text">Sewa ruang dengan klik menu penyewaan atau klik tombol berikut.</p>
                                        <a href="/penyewaan" class="btn"
                                            style="color:white; background-color:#5CB874">Sewa Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
                

                {{--  <!--kalau belum isi di awal-->  --}}
                <div class="container">
                    <div class="row">
                        <div class="container rounded bg-white mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                            class="rounded-circle mt-5" width="150px"
                                            src="assets/img/iconaccount.png"><span
                                            class="font-weight-bold">{{ $user->nama }}</span><span
                                            class="text-black-50">{{ $user->email }}</span><span>
                                        </span></div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profil Saya</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12"><label class="labels">Nama</label><input type="text"
                                                    class="form-control" value="{{ $user->nama }}" disabled>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label class="labels">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $user->tempatlahir }}, {{ $user->tanggallahir }}" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Alamat</label>
                                                <input type="text" class="form-control" value="{{ $user->alamat }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Pekerjaan</label>
                                                <input type="text" class="form-control" value="{{ $user->pekerjaan }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">No. HP</label>
                                                <input type="text" class="form-control" value="{{ $user->notelp }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Jumlah Anggota Keluarga</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $user->jmlkeluarga }} orang" disabled>
                                            </div>
                                        </div>
                                        <div class="mt-5 text-center d-grid gap-2">
                                            <button class="btn btn-modal-berkas"
                                                type="button" data-bs-toggle="modal" data-bs-target="#modalberkas"
                                                data-id="{{ $user->id }}"
                                                style="color:white; background-color:#5CB874">
                                                Lihat Berkas Saya
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('partials.modalberkas')

            </section>
        </main>

    @elseif ($role == 'admin')
        <main id="main">
            {{--  <!-- ======= Services Section ======= -->  --}}
            <section class="featured-services section-bg">
                <div class="container">
                    <div class="row">
                        <div class="container rounded bg-white mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                            class="rounded-circle mt-5" width="150px"
                                            src="assets/img/iconaccount.png"><span
                                            class="font-weight-bold">{{ $user->nama }}</span><span
                                            class="text-black-50">{{ $user->email }}</span><span>
                                        </span></div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profil Admin</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12"><label class="labels">Nama</label><input
                                                    type="text" class="form-control" value="{{ $user->nama }}"
                                                    readonly></div>
                                            <div class="col-md-12"><label class="labels">Email</label><input
                                                    type="text" value="{{ $user->email }}" class="form-control"
                                                    readonly></div>
                                            <div class="col-md-12"><label class="labels">Password</label><input
                                                    type="text" value="*****" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        {{--  <!-- End #main -->  --}}
    @endif
@endsection
