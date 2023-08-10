@extends ('layouts.main')

@section('content')
    <main id="main">
        <section>
            <div class="container">
                <div class="pb-0">
                    <h3 style="font-weight:700;"> REKAP RUANG </h3>
                    <p> Daftar Data Ruang Rusunawa Kota Malang</p>
                </div>

                <button type="button" class="btn" style="color:white; background-color:#5CB874" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Tambah Data
                </button>
            </div>
            {{--  <!-- Modal -->  --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <input type="hidden" name="id" id="id">
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status1"
                                                    value="option1" checked>
                                                <label class="form-check-label" for="status1">
                                                    Terisi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status2"
                                                    value="option2">
                                                <label class="form-check-label" for="status">
                                                    Kosong
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group, mb-3">
                                        <label for="exampleInputEmail1">Nama Pengisi</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required />
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn"
                                    style="color:white; background-color:#5CB874">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>

            {{--  <!--Tabel-->  --}}
            <div class="container">
                <div class="row py-10">
                    <div class="col-md-12">
                        <div class="card rounded shadow border-0">
                            <div class="card-body p-10 bg-white rounded">
                                <div class="table-responsive">
                                    <table id="tabel-data" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Status </th>
                                                <th> Nama </th>
                                                <th> Kode Ruang </th>
                                                <th> Aksi </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td> {{ $loop->iteration }} </td>
                                                    <td> <button type="button"
                                                            class="btn btn-sm btn-{{ $item->is_dipakai == 0 ? 'danger' : 'success' }}">{{ $item->is_dipakai == 0 ? 'Kosong' : 'Terisi' }}</button>
                                                    </td>
                                                    <td>{{ $item->user->nama }}</td>
                                                    <td>{{ $item->koderuang }}</td>
                                                    <td>
                                                        <button class="button-arounder">
                                                            <span class="material-symbols-outlined"> edit </span>
                                                        </button>
                                                        <button class="button-arounder" onclick="BtnDel(this)">
                                                            <span class="material-symbols-outlined"> delete </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


        </section>
    </main>
@endsection
