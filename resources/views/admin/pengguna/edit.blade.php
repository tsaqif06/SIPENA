@extends('layouts.main')

@section('content')
    
    
<main id="main">
    <!-- ======= Featured Services Section ======= -->
        
    {{-- {{ $users }} --}}
    <section> 
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <h4 style="color:#5CB874">Edit Data Pengguna</h4>
            </div>
            <form action="/pengguna/{{ $users->id }}" method="POST">
              @method('PUT')
              @csrf
              <div class="modal-body">
                  <input type="hidden" name="id" id="id" value="">
                  <div class="form-group mb-3">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{ $users->nama }}" required />
                  </div>
                  <div class="form-group mb-3">
                      <label for="tempatLahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="tempat lahir" value="{{ $users->tempatlahir }}" required />
                  </div>
                  <div class="form-group mb-3">
                      <label for="tanggalLahir">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="tanggal lahir" value="{{ $users->tanggallahir }}" required />
                  </div>
                  <div class="form-group mb-3">
                      <label for="Alamat">Alamat</label>
                      <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="alamat" value="{{ $users->alamat }}" required />
                  </div>
                  <div class="form-group mb-3">
                      <label for="Pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="Pekerjaan" name="Pekerjaan" placeholder="pekerjaan" value="{{ $users->pekerjaan }}" required />
                  </div>
                  <div class="form-group mb-3">
                      <label for="notelp">No HP</label>
                      <input type="text" class="form-control" id="notelp" name="notelp" placeholder="nomor telepon" value="{{ $users->notelp }}" required />
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn" style="color:white; background-color:#5CB874">Edit</button>
              </div>
          </form>
          
          </div>
        </div>
      </div>
    </section>

      

      
      
{{-- @endif --}}


@endsection
