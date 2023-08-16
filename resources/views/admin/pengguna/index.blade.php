@extends('layouts.main')

@section('content')
    {{-- @if ($role == 'admin') --}}

    <main id="main">

        {{--  <!-- ======= Featured Services Section ======= -->  --}}
        <section>
            <div class="container">
                <div class="pb-0">
                    <h3 style="font-weight:700;"> TABEL PENGGUNA </h3>
                    <p> Data Tabel Pengguna Rusunawa Kota Malang</p>
                    <button type="button" class="btn" style="color:white; background-color:#5CB874" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <a href="/pengguna/create" class="no-decoration" style="color:white; background-color:#5CB874">Tambah
                            Data </a>
                    </button>
                    @if (Session::has('status'))
                        <div style="width: 400px" class="alert alert-success alert-dismissible fade show mt-3"
                            role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                </div>
            </div> <br>

            </div>
            </div>
            </div>

            <div class="container">
                <div class="row py-10">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card rounded shadow border-0">
                            <div class="card-body p-10 bg-white rounded">
                                <div class="table-responsive">
                                    <table id="table-data" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Nama </th>
                                                <th style="width: 150px"> Tempat lahir </th>
                                                <th style="width: 150px"> Tanggal Lahir </th>
                                                <th> Alamat </th>
                                                <th> Pekerjaan </th>
                                                <th> No HP </th>
                                                <th> Berkas </th>
                                                <th> Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $item)
                                                <tr>
                                                    <td> {{ $loop->iteration }} </td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td> {{ $item->tempatlahir }}</td>
                                                    <td> {{ $item->tanggallahir }}</td>
                                                    <td> {{ $item->alamat }}</td>
                                                    <td> {{ $item->pekerjaan }}</td>
                                                    <td> {{ $item->notelp }}</td>
                                                    <td><button class="btn btn-sm btn-modal-berkas"
                                                            style="color:white; background-color:#5CB874"
                                                            data-bs-toggle="modal" data-bs-target="#modalberkas"
                                                            data-id="{{ $item->id }}">Lihat Berkas</button></td>
                                                    <td>
                                                        <button class="button-arounder">
                                                            <span class="material-symbols-outlined"><a class="no-decoration"
                                                                    href="pengguna/{{ $item->id }}/edit"> edit
                                                                </a></span>
                                                        </button>
                                                        <form action="/pengguna/{{ $item->id }}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="button-arounder" type="submit"
                                                                onclick="return confirm('Apakah Anda Yakin?')">
                                                                <span class="material-symbols-outlined"> delete </span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--modal berkas-->
        <div class="modal fade" id="modalberkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body position-relative">
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
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    {{-- @endif --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var suratpermohonan, suratkesanggupan, suratpernyataan;

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

            document.querySelectorAll('.btn-modal-berkas').forEach((element) => {
                element.addEventListener('click', (e) => {
                    document.getElementById('modal-loader').classList.remove('hide');

                    let id = e.target.dataset.id;

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

        });
    </script>
@endsection
