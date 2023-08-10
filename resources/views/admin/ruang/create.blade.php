@extends ('layouts.main')
@section ('content')

<main id="main">
    <section>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 style="color: #5CB874">Edit Data Ruang</h4>
                    </div>
                    <form action="/ruang" method="GET">
                      @csrf
                        <div class="modal-body">
                          <input type="hidden" name="id" id="id">
                          <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status1" value="option1"
                                    checked>
                                  <label class="form-check-label" for="status1">
                                    Terisi
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status2" value="option2">
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