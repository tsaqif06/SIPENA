@extends('layouts.main')

@section('content')

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

    @include('partials.modalberkas')

  </main>
  <!-- End #main -->

@endsection
