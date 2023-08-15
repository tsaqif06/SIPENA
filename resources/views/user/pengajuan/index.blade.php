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
                                    <h4 class="text-right mb-3">Formulir Penyewaan</h4>

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

                                    {{-- END USER INFORMATION --}}

                                    <br><hr><br>

                                    {{-- FOR POST --}}
                                    <h4 class="text-right mb-3">Berkas Penyewaan</h4>

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="fotoktp">Foto KTP</label>
                                            <div class="row border rounded">
                                                <div class="col-md-6 mb-2">
                                                    <label class="labels" for="fotoktpsuami">Foto KTP Suami</label>
                                                    <span class="labels text-danger">*jpg</span>
                                                    <input type="file" class="form-control" id="fotoktp-suami"
                                                    name="fotoktp_suami" accept=".jpg" required />
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="labels" for="fotoktpistri">Foto KTP Istri</label>
                                                    <span class="labels text-danger">*jpg</span>
                                                    <input type="file" class="form-control" id="fotoktp-istri"
                                                    name="fotoktp_istri" accept=".jpg" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="fotokk">Foto Kartu Keluarga</label>
                                            <span class="labels text-danger">*jpg</span>
                                            <input type="file" class="form-control" id="fotokk"
                                                name="fotokk" accept=".jpg" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="snacskm">Foto Surat Nikah / Akte Cerai </label>
                                            <span class="labels text-danger">*jpg</span>
                                            <input type="file" class="form-control" id="berkas-statusnikah"
                                                name="berkas_statusnikah" accept=".jpg" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="surattidakmemilikihunian">Surat Keterangan belum memiliki rumah </label>
                                            <span class="labels text-danger">*jpg/pdf</span>
                                            <input type="file" class="form-control" id="surat-ket-rumah"
                                                name="surat_ket_rumah" accept=".jpg , .pdf" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="suratpenghasilan">Surat Keterangan memiliki penghasilan tetap</label>
                                            <span class="labels text-danger">*jpg/pdf</span>
                                            <input type="file" class="form-control" id="surat-ket-pendapatan"
                                                name="surat_ket_pendapatan" accept=".jpg , .pdf" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="skck">Surat Keterangan Catatan Kepolisian (SKCK)</label>
                                            <span class="labels text-danger">*jpg/pdf</span>
                                            <input type="file" class="form-control" id="surat-ket-kepolisian"
                                                name="surat_ket_kepolisian" accept=".jpg , .pdf" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="pasfoto">Pas foto berwarna (4x6)</label>
                                            <div class="row border rounded">
                                                <div class="col-md-6 mb-2">
                                                    <label class="labels" for="pasfotosuami">Pas Foto Suami</label>
                                                    <span class="labels text-danger">*jpg</span>
                                                    <input type="file" class="form-control" id="pasfoto-suami"
                                                        name="pasfoto_suami" accept=".jpg" required />
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label class="labels" for="pasfotoistri">Pas Foto Istri</label>
                                                    <span class="labels text-danger">*jpg</span>
                                                    <input type="file" class="form-control" id="pasfoto-istri"
                                                        name="pasfoto_istri" accept=".jpg" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="suratpermohonan">PDF Surat Permohonan</label>
                                            <span class="labels text-danger">*pdf</span>
                                            <input type="file" class="form-control" id="surat-permohonan"
                                                name="surat_permohonan" accept=".pdf" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="suratkesanggupan">PDF Surat Kesanggupan</label>
                                            <span class="labels text-danger">*pdf</span>
                                            <input type="file" class="form-control" id="surat-kesanggupan"
                                                name="surat_kesanggupan" accept=".pdf" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="suratpernyataan">PDF Surat Pernyataan Bermaterai</label>
                                            <span class="labels text-danger">*pdf</span>
                                            <input type="file" class="form-control" id="surat-pernyataan"
                                                name="surat_pernyataan" accept=".pdf" required />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="" for="suratrekomendasi"> Surat Rekomendasi hunian diffable</label>
                                            <span class="labels text-danger">*jpg/pdf</span>
                                            <input type="file" class="form-control" id="surat-rekomendasi"
                                                name="surat_rekomendasi" accept=".jpg , .pdf" required />
                                        </div>
                                    </div>
                                    {{-- END FOR POST --}}

                                    <div class="mt-5 text-center d-grid gap-2">
                                        <button class="btn text-center d-grid gap-2" type="submit"
                                            onclick="return confirm('Apakah anda yakin ingin mengirim pengajuan sewa?')"
                                            style="color:white; background-color:#5CB874">Kirim Pengajuan
                                            Sewa</button>
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

@endsection
