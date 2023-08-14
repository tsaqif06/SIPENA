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
                            </div>
                        @endif

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
                                        <div class="mt-5 text-center d-grid gap-2"><button id="btn-modal-berkas"
                                                class="btn" type="button" data-bs-toggle="modal"
                                                data-bs-target="#modalberkas"
                                                style="color:white; background-color:#5CB874">Lihat Berkas Saya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalberkas" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div id="modal-loader"
                                        class="position-absolute w-100 h-100 bg-light d-flex justify-content-center align-items-center">
                                        <span class="spinner-border text-success" role="status"></span>
                                    </div>
                                    <h4 class="modal-title" id="exampleModalLabel">Berkas</h4>
                                    <div class="form-group">
                                        <label>Surat Permohonan</label>
                                        <div id="suratpermohonan" class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Data Kosong">
                                            <span class="input-group-append">
                                                <button class="btn" style="color:white; background-color:#5CB874"
                                                    type="button">Lihat</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Kesanggupan</label>
                                        <div id="suratkesanggupan" class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Data Kosong">
                                            <span class="input-group-append">
                                                <button class="btn" style="color:white; background-color:#5CB874"
                                                    type="button">Lihat</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Pernyataan</label>
                                        <div id="suratpernyataan" class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Data Kosong">
                                            <span class="input-group-append">
                                                <button class="btn" style="color:white; background-color:#5CB874"
                                                    type="button">Lihat</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                let suratpermohonan, suratkesanggupan, suratpernyataan;

                function updateModalBerkas(notEmpty, data) {
                    if (notEmpty) {
                        // console.log('not empty');
                        suratpermohonan = data.suratpermohonan;
                        suratkesanggupan = data.suratkesanggupan;
                        suratpernyataan = data.suratpernyataan;
                    } else {
                        // console.log('data empty');
                        [suratpermohonan, suratkesanggupan, suratpernyataan] = ['', '', ''];
                    }
                    // console.log([suratpermohonan, suratkesanggupan, suratpernyataan, target]);

                    document.querySelector('#suratpermohonan input').value = (suratpermohonan !== '#' ?
                        suratpermohonan : '');
                    document.querySelector('#suratkesanggupan input').value = (suratkesanggupan !== '#' ?
                        suratkesanggupan : '');
                    document.querySelector('#suratpernyataan input').value = (suratpernyataan !== '#' ?
                        suratpernyataan : '');

                    document.querySelector('#suratpermohonan button').setAttribute('onclick',
                        (suratpermohonan !== '' ? `window.open('/storage/${suratpermohonan}', '_blank')` : '')
                    );
                    document.querySelector('#suratkesanggupan button').setAttribute('onclick',
                        (suratkesanggupan !== '' ? `window.open('/storage/${suratkesanggupan}', '_blank')` : '')
                    );
                    document.querySelector('#suratpernyataan button').setAttribute('onclick',
                        (suratpernyataan !== '' ? `window.open('/storage/${suratpernyataan}', '_blank')` : '')
                    );

                    document.querySelector('#suratpermohonan button').disabled = !notEmpty;
                    document.querySelector('#suratkesanggupan button').disabled = !notEmpty;
                    document.querySelector('#suratpernyataan button').disabled = !notEmpty;
                }

                document.getElementById('btn-modal-berkas').addEventListener('click', () => {
                    document.getElementById('modal-loader').classList.remove('hide');

                    let id = {{ $user->id }};

                    fetch(`/api/pengajuan/berkas?id=${id}`)
                        .then((response) => {
                            if (!response.ok) throw Error(response.statusText);
                            return response.json();
                        })
                        .then((data) => {
                            updateModalBerkas((Object.keys(data).length !== 0), data);
                        })
                        .catch((error) => {
                            console.log(error)
                        })
                        .finally(() => {
                            document.getElementById('modal-loader').classList.add('hide');
                        });
                });

            });
        </script>
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
