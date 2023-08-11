@extends('layouts.main')

@section('content')

{{-- @if ($role == 'admin') --}}

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section>
      <div class="container">
        <div class="pb-0">
          <h3 style="font-weight:700;"> TABEL PENGGUNA </h3>
          <p> Data Tabel Pengguna Rusunawa Kota Malang</p>
          <button type="button" class="btn" style="color:white; background-color:#5CB874" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <a href="/pengguna/create" style="color:white; background-color:#5CB874">Tambah Data </a>
          </button>

        </div>
      </div> <br>
      {{-- @if (Session::has('status'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
      </div>

      @endif --}}

            </div>
          </div>
        </div>

      <div class="container">
        <div class="row py-10">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card rounded shadow border-0">
              <div class="card-body p-10 bg-white rounded">
                <div class="table-responsive">
                  <table id="tabel-data" class="table table-striped table-bordered">
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
                        <td> {{ $item->pekerjaan}}</td>
                        <td> {{ $item->notelp }}</td>
                        <td><button class="btn btn-sm" style="color:white; background-color:#5CB874"
                            data-bs-toggle="modal" data-bs-target="#modalberkas">Lihat Berkas</button></td>
                        <td>
                          <button class="button-arounder">
                            <span class="material-symbols-outlined"><a href="pengguna/{{ $item->id }}/edit"> edit </a></span>
                          </button>
                          {{-- <form action="{{ 'pengguna' }}" method="POST"> --}}
                            @method('delete')
                            @csrf
                            <button class="button-arounder">
                              <span class="material-symbols-outlined"><a href="pengguna/{{ $item->id }}/delete"> delete </a></span>
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
            <div class="modal-body">
              <h4 class="modal-title" id="exampleModalLabel">Berkas</h4>
              <div class="form-group">
                <label>Surat Permohonan</label>
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="xxx">
                  <span class="input-group-append">
                    <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Surat Permohonan</label>
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="xxx">
                  <span class="input-group-append">
                    <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Surat Permohonan</label>
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="xxx">
                  <span class="input-group-append">
                    <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
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


@endsection
