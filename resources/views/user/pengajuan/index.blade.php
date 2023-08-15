@extends('layouts.main')

@section('content')
    <main id="main">
        <section class="featured-services section-bg">
            <div class="container">
                <div class="row">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (empty($data[0]) && empty($data[1]))
                        <div class="container rounded bg-white mt-5 mb-5">
                            <form action="/penyewaan" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3 border-right">
                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                                class="rounded-circle mt-5" width="150px"
                                                src="../assets/img/iconaccount.png"><span
                                                class="font-weight-bold">Pengguna</span><span
                                                class="text-black-50">pengguna@gmail.com</span><span> </span></div>
                                    </div>
                                    <div class="col-md-9 border-right">
                                        <div class="p-3 py-5">

                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    Error saat memproses data! Data yang Anda masukan mungkin tidak sesuai,
                                                    coba lagi.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif


                                            {{-- USER INFORMATION --}}
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Formulir Penyewaan</h4>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <label class="labels">Nama</label>
                                                    <input type="text" class="form-control text-secondary" placeholder=""
                                                        value="{{ $user->nama }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control text-secondary" placeholder=""
                                                    value="{{ $user->tempatlahir }}, {{ $user->tanggallahir }}" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Alamat</label>
                                                <input type="text" class="form-control text-secondary" placeholder=""
                                                    value="{{ $user->alamat }}" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Pekerjaan</label>
                                                <input type="text" class="form-control text-secondary" placeholder=""
                                                    value="{{ $user->pekerjaan }}" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">No. HP</label>
                                                <input type="number" class="form-control text-secondary" placeholder=""
                                                    value="{{ $user->notelp }}" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Jumlah Anggota Keluarga</label>
                                                <input type="number" class="form-control text-secondary" placeholder=""
                                                    value="{{ $user->jmlkeluarga }}" disabled>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <label class="labels">Pilihan Ruang Sewa</label>
                                                <input type="text" class="form-control mb-2" name="ruang1"
                                                    placeholder="Ruang 1" value="" list="ruangkosong"
                                                    autocomplete="off" required>
                                                <input type="text" class="form-control mb-2" name="ruang2"
                                                    placeholder="Ruang 2" value="" list="ruangkosong"
                                                    autocomplete="off" required>
                                                <input type="text" class="form-control mb-2" name="ruang3"
                                                    placeholder="Ruang 3" value="" list="ruangkosong"
                                                    autocomplete="off" required>
                                                <datalist id="ruangkosong"></datalist>
                                            </div>
                                            {{-- END USER INFORMATION --}}
                                            {{--  KTP, SURAT NIKAH, KARTU KELUARGA, KETERANGAN PENGHASILAN, SURAT PERNYATAAN, PAS FOTO KEPALA KELUARAGA 4X6 CM  --}}

                                            <br>

                                            {{-- FOR POST --}}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="labels" for="suratpermohonan">PDF Surat Permohonan</label>
                                                    <input type="file" class="form-control" id="suratpermohonan"
                                                        name="suratpermohonan" accept=".pdf" required />
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="labels" for="suratkesanggupan">PDF Surat
                                                        Kesanggupan</label>
                                                    <input type="file" class="form-control" id="suratkesanggupan"
                                                        name="suratkesanggupan" accept=".pdf" required />
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="labels" for="suratpernyataan">PDF Surat Pernyataan Tidak
                                                        Memiliki Hunian</label>
                                                    <input type="file" class="form-control" id="suratpernyataan"
                                                        name="suratpernyataan" accept=".pdf" required />
                                                </div>
                                                {{-- END FOR POST --}}

                                            </div>
                                            <div class="mt-5 text-center d-grid gap-2">
                                                <button class="btn text-center d-grid gap-2" type="submit"
                                                    onclick="return confirm('Apakah anda yakin ingin mengirim pengajuan sewa?')"
                                                    style="color:white; background-color:#5CB874">Kirim Pengajuan
                                                    Sewa</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    @else
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="container bg-white mt-5 mb-5">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="card bg-light d-flex justify-content-center align-items-center"
                                                style="height: 270px;">
                                                <div class="d-flex align-items-center">
                                                    <div class="card-body">
                                                        @if (empty($data[1]))
                                                            <h2 class="card-title text-muted text-center">Data Anda sedang
                                                                diproses oleh Admin.</h2>
                                                        @else
                                                            <h5 class="card-text text-center text-muted mx-5">Anda sudah
                                                                mendapatkan ruang untuk dihuni!</h5>
                                                            <h1 class="card-title text-center">Kode ruang anda adalah :
                                                            </h1>
                                                            <h1 class="card-title text-center fw-bold"
                                                                style="color:#5CB874;">{{ $data[1]->koderuang }}</h1>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let ruangkosong = {!! !$ruangkosong->isEmpty() ? json_encode($ruangkosong->toArray()) : '[]' !!};
            ruangkosong = ruangkosong.map((e) => `<option value="${e}">`).join('');
            document.getElementById('ruangkosong').innerHTML = ruangkosong;
        });
    </script>

@endsection
