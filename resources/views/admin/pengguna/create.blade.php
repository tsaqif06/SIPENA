@extends ('layouts.main')

@section ('content')

<main id="main">
    <section>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 style="color: #5CB874">Tambah Data Pengguna</h4>
                    </div>
                    <form action="/pengguna" method="POST">
                        @csrf
                        <div class="modal-body">
                          <input type="hidden" name="id" id="id">
                          <div class="form-group ; mb-3">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required />
                          </div>
                          <div class="form-group, mb-3">
                            <label for="tempatLahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatLahir" name="tempatlahir" placeholder="Tempat Lahir" required />
                          </div>
                          <div class="form-group, mb-3">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" required />
                          </div>
                          <div class="form-group; mb-3">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required />
                          </div>
                          <div class="form-group; mb-3">
                            <label for="Pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan"
                              required />
                          </div>
                          <div class="form-group; mb-3">
                            <label for="NoHP">No HP</label>
                            <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telepon" required />
                          </div>
                          <div class="form-group; mb-3">
                            <label for="JumlahKeluarga">Jumlah Keluarga</label>
                            <input type="integer" class="form-control" id="jmlkeluarga" name="jmlkeluarga" placeholder="Jumlah Keluarga" required />
                          </div>
                          <div class="form-group; mb-3">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required />
                          </div>
                          <div class="form-group; mb-3">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Password" required />
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <a href="/pengguna" style="color: black" >Kembali</a>
                          </button>
                          <button type="submit" class="btn" style="color:white; background-color:#5CB874">Tambah</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
