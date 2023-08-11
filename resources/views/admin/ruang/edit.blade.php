@extends ('layouts.main')
@section ('content')

<main id="main">
    <section>
        <div class="container">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <h3 style="color: #5CB874">Edit Data</h3>
                </div>
                <form action="/ruang/{{ $ruang->id }}" method="POST">
                  @method('put')
                  @csrf
                  <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="{{ $ruang->id }}">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_dipakai" id="status1" value="1"
                            {{ $ruang->is_dipakai == 1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="status1">
                              Terisi
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_dipakai" id="status2" value="0"
                            {{ $ruang->is_dipakai == 0 ? 'checked' : ''}}>
                            <label class="form-check-label" for="status">
                              Kosong
                            </label>
                            {{-- @error('is_dipakai') --}}
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <div class="form-group, mb-3">
                      <label for="exampleInputEmail1">Kode Ruang</label>
                      <input type="text" class="form-control" id="koderuang" name="koderuang" value="{{ $ruang->koderuang }}" required />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn" style="color:white; background-color:#5CB874">Edit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
</main>
@endsection