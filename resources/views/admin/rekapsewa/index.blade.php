@extends('layouts.main')

@section('content')

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section>
      <div class="container">
        <div class="pb-0">
          <h3 style="font-weight:700;"> TABEL PENGAJUAN </h3>
          <p> Data Tabel Pengajuan Sewa Rusunawa Kota Malang</p>
        </div>
      </div> <br>

        <div class="container">
          <div class="row py-10"> 
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card rounded shadow border-0">
                    <div class="card-body p-10 bg-white rounded">
                      <div class="table-responsive"> 
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @elseif ($errors->any() || session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Terjadi kesalahan saat memproses data! Data yang Anda masukan mungkin tidak sesuai, coba lagi.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <table id="table-data" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th> No </th>
                                  <th> Nama </th>
                                  <th> TTL </th>
                                  <th> Alamat </th>
                                  <th> Pekerjaan </th>
                                  <th> No HP </th>
                                  <th> Jml Anggota </th>
                                  <th> Berkas </th>
                                  <th> Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->nama }}</td>
                                        <td>{{ $item->user->tempatlahir }}, {{ $item->user->tanggallahir }}</td>
                                        <td>{{ $item->user->alamat }}</td>
                                        <td>{{ $item->user->pekerjaan }}</td>
                                        <td>{{ $item->user->notelp }}</td>
                                        <td>{{ $item->user->jmlkeluarga }}</td>
                                        <td style="vertical-align: middle; text-align: center;">
                                          <button class="btn btn-sm btn-modal-berkas" data-bs-toggle="modal" data-bs-target="#modalberkas"
                                            data-id="{{ $item->id }}"
                                            style="color:white; background-color:#5CB874">
                                            Lihat Berkas
                                          </button>
                                        </td>
                                        <td style="vertical-align: middle; text-align: center;">
                                            <button class="btn btn-sm btn-modal-penyewaan" data-bs-toggle="modal" data-bs-target="#modalpenyewaan" 
                                              data-id="{{ $item->id }}" 
                                              data-lantai="{{ $item->lantai_id }}" 
                                              style="color:white; background-color:#5CB874">
                                              Aksi
                                            </button>
                                          </td>
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

  </main><!-- End #main -->

  <!--Modal Aksi Sewa-->
  <div class="modal fade" id="modalpenyewaan" tabindex="-1" aria-labelledby="modalpenyewaanlabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
              <div class="row justify-content-md-center">
              <div class="col-md-12">
                <div class="modal-body">
                  <h4 class="modal-title" id="modalpenyewaanlabel">Data Pemilihan Lantai</h4>
                  <div class="form-group mt-2">
                    <input type="text" class="form-control text-secondary" id="lantai" disabled>
                  </div>
                </div>
                <div class="modal-body">
                  <h4 class="modal-title" id="modalpenyewaanlabel">Penempatan Ruang</h4>
                  <form id="accept-form" action="/pengajuan" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label class="labels" for="ruang">Pilih ruang yang akan ditempati user.</label>
                      <input type="text" class="form-control" id="ruang" list="ruangkosong" name="ruang" autocomplete="off" placeholder="A.1.01" required>
                      <datalist id="ruangkosong">
                        @foreach ($ruangkosong as $ruang)
                          <option value="{{ $ruang }}">
                        @endforeach
                      </datalist>
                    </div>
                </div>
              </div>
            </div>
          </div>
            
          <div class="modal-footer flex-row-reverse justify-content-start">
            <button type="submit" class="btn" onclick="return confirm('Apakah anda yakin ingin menerima pengajuan ini?')" style="color:white; background-color:#5CB874">Terima</button>
            </form>
            <form id="decline-form" action="/pengajuan" method="POST">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menolak pengajuan ini?')">Tolak</button>
            </form>
            <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- <div class="modal fade" id="modalpenyewaan" tabindex="-1" aria-labelledby="modalpenyewaanlabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body p-4">
              <h3 class="modal-title" id="modalpenyewaanlabel">Penempatan Ruang</h3>
              <form id="accept-form" action="/pengajuan" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label class="labels" for="ruang">Pilih ruang yang akan ditempati user.</label>
                  <input type="text" class="form-control" id="ruang" list="ruangkosong" name="ruang" autocomplete="off" placeholder="L3 L270" required>
                  <datalist id="ruangkosong"></datalist>
                </div>
            </div>
          <div class="modal-footer flex-row-reverse justify-content-start">
            <button type="submit" class="btn" onclick="return confirm('Apakah anda yakin ingin menerima pengajuan ini?')" style="color:white; background-color:#5CB874">Terima</button>
            </form>
            <form id="decline-form" action="/pengajuan" method="POST">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menolak pengajuan ini?')">Tolak</button>
            </form>
            <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
      </div>
    </div>
  </div> --}}

  @include('partials.modalberkas')

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      let lantai = ['lantai 1', 'lantai 2', 'lantai 3', 'lantai 4', 'lantai 5', 'Sewa Komersil']

      document.querySelectorAll('.btn-modal-penyewaan').forEach(element => {
        element.addEventListener('click', (e) => {
          document.querySelector('#lantai').value = lantai[e.target.dataset.lantai-1];
          document.querySelector('form#accept-form').setAttribute('action', `/pengajuan/${e.target.dataset.id}`);
          document.querySelector('form#decline-form').setAttribute('action', `/pengajuan/${e.target.dataset.id}`);
        });
      });

    });
  </script>

@endsection