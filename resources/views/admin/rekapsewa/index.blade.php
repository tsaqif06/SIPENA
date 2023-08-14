@extends('layouts.main')

@section('content')

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section>
      <div class="container">
        <div class="pb-0">
        <h3 style="font-weight:700;"> TABEL PENGAJUAN </h3>
        <p> Data Tabel Pengajuan Sewa Rusunawa Kota Malang</p>
        
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
                                        <td><button class="btn btn-sm btn-modal-berkas" data-bs-toggle="modal" data-bs-target="#modalberkas"
                                            data-id="{{ $item->id }}" 
                                            data-suratpermohonan="{{ $item->suratpermohonan }}"
                                            data-suratkesanggupan="{{ $item->suratkesanggupan }}"
                                            data-suratpernyataan="{{ $item->suratpernyataan }}"
                                            style="color:white; background-color:#5CB874">
                                            Lihat Berkas
                                          </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-modal-penyewaan" data-bs-toggle="modal" data-bs-target="#modalpenyewaan" 
                                              data-id="{{ $item->id }}" 
                                              data-pemilihan="{{ $item->pilihanruang }}" 
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

  <!--modal aksi sewa-->
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
                    <h4 class="modal-title" id="modalpenyewaanlabel">Data Pemilihan Ruang</h4>
                    <div class="form-group">
                      <input type="text" class="form-control text-secondary mt-2" id="ruang1" name="ruang" placeholder="Ruang1" disabled>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control text-secondary mt-2" id="ruang2" name="ruang" placeholder="Ruang2" disabled>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control text-secondary mt-2" id="ruang3" name="ruang" placeholder="Ruang3" disabled>
                    </div>
                  </div>
                  <div class="modal-body">
                    <h4 class="modal-title" id="modalpenyewaanlabel">Penempatan Ruang</h4>
                    <form id="edit-form" action="/pengajuan" method="POST">
                      @method('PUT')
                      @csrf
                      <div class="form-group">
                        <label class="labels" for="ruang">Pilih ruang yang akan ditempati user.</label>
                        <input type="text" class="form-control" id="ruang" list="ruangkosong" name="ruang" autocomplete="off" placeholder="L3 L270" required>
                        <datalist id="ruangkosong"></datalist>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            
          <div class="modal-footer flex-row-reverse justify-content-start">
            <button type="submit" class="btn" onclick="return confirm('Apakah anda yakin ingin menerima pengajuan ini?')" style="color:white; background-color:#5CB874">Terima</button>
            </form>
            <form id="delete-form" action="/pengajuan" method="POST">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menolak pengajuan ini?')">Tolak</button>
            </form>
            <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
      </div>
    </div>
  </div>

  <!--modal berkas-->
  <div class="modal fade" id="modalberkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
            <h4 class="modal-title" id="exampleModalLabel">Berkas</h4>
            <div class="form-group">
              <label>Surat Permohonan</label>
              <div id="suratpermohonan" class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Lihat Surat Permohonan">
                <span class="input-group-append">
                  <a href="" target="_blank">
                    <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
                  </a>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>Surat Kesanggupan</label>
              <div id="suratkesanggupan" class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Lihat Surat Kesanggupan">
                <span class="input-group-append">
                  <a href="" target="_blank">
                    <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
                  </a>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>Surat Pernyataan</label>
              <div id="suratpernyataan" class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info text-secondary" disabled placeholder="Lihat Surat Pernyataan">
                <span class="input-group-append">
                  <a href="" target="_blank">
                    <button class="btn" style="color:white; background-color:#5CB874" type="button">Lihat</button>
                  </a>
                </span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {

      document.querySelectorAll('.btn-modal-penyewaan').forEach(element => {
        element.addEventListener('click', (e) => {
          let ruang = JSON.parse(e.target.dataset.pemilihan);
          document.getElementById('ruang1').value = ruang[0];
          document.getElementById('ruang2').value = ruang[1];
          document.getElementById('ruang3').value = ruang[2];

          document.querySelector('form#edit-form').setAttribute('action', `/pengajuan/${$(e.target).data('id')}`);
          document.querySelector('form#delete-form').setAttribute('action', `/pengajuan/${$(e.target).data('id')}`);
        });
      });

      document.querySelectorAll('.btn-modal-berkas').forEach(element => {
        element.addEventListener('click', (e) => {
          document.querySelector('#suratpermohonan input').value = '/storage/' + e.target.dataset.suratpermohonan;
          document.querySelector('#suratkesanggupan input').value = '/storage/' + e.target.dataset.suratkesanggupan;
          document.querySelector('#suratpernyataan input').value = '/storage/' + e.target.dataset.suratpernyataan;

          document.querySelector('#suratpermohonan a').setAttribute('href', '/storage/' + e.target.dataset.suratpermohonan);
          document.querySelector('#suratkesanggupan a').setAttribute('href', '/storage/' + e.target.dataset.suratkesanggupan);
          document.querySelector('#suratpernyataan a').setAttribute('href', '/storage/' + e.target.dataset.suratpernyataan);
        });
      });

      let ruangkosong = {!! !$ruangkosong->isEmpty() ? json_encode($ruangkosong->toArray()) : "[]" !!};
      ruangkosong = ruangkosong.map((e) => `<option value="${e}">`).join('');
      document.getElementById('ruangkosong').innerHTML = ruangkosong;
    });
  </script>

@endsection