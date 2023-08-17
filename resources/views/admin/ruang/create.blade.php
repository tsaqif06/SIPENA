@extends ('layouts.main')
@section ('content')

<main id="main">
    <section>
        <div class="container">
          @if (session()->has('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
           @elseif ($errors->any())
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Tidak dapat menambahkan. Data user sudah ada!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 style="color: #5CB874">Edit Data Ruang</h4>
                    </div>
                    <form action="/ruang" method="POST">
                      @csrf
                        <div class="modal-body">
                          <input type="hidden" name="id" id="id">
                          <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="is_dipakai" id="status1" value="1"
                                    checked>
                                  <label class="form-check-label" for="status1">
                                    Terisi
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="is_dipakai" id="status2" value="0">
                                  <label class="form-check-label" for="status">
                                    Kosong
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <div class="form-group, mb-3">
                            <label for="exampleInputEmail1">Kode Ruang</label>
                            <input type="text" class="form-control" id="koderuang" name="koderuang" required />
                          </div>
                          <div class="form-group, mb-3">
                            <label for="exampleInputEmail1">Nama Pengisi</label>
                            <input type="text" class="form-control" id="nama" name="nama" required />
                          </div>
                          <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Rusunawa</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="rusunawa" id="rusunawa2" value="2"
                                  checked>
                                <label class="form-check-label" for="rusunawa2">
                                  2
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="rusunawa" id="rusunawa1" value="1">
                                <label class="form-check-label" for="rusunawa1">
                                  1
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Lantai</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="lantai_id" id="lantai5" value="5"
                                  checked>
                                <label class="form-check-label" for="lantai5">
                                  5
                                </label>
                              </div><div class="form-check">
                                <input class="form-check-input" type="radio" name="lantai_id" id="lantai4" value="4"
                                  checked>
                                <label class="form-check-label" for="lantai4">
                                  4
                                </label>
                              </div><div class="form-check">
                                <input class="form-check-input" type="radio" name="lantai_id" id="lantai3" value="3"
                                  checked>
                                <label class="form-check-label" for="lantai3">
                                  3
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="lantai_id" id="lantai2" value="2"
                                  checked>
                                <label class="form-check-label" for="lantai2">
                                  2
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="lantai_id" id="lantai1" value="1">
                                <label class="form-check-label" for="lantai1">
                                  1
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn" style="color:white; background-color:#5CB874">Tambah</button>
                        </div>

                      </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
