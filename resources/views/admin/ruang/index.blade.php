@extends ('layouts.main')

@section ('content')

<main id="main">
    <section>
      <div class="container">
        <div class="pb-0">
          <h3 style="font-weight:700;"> REKAP RUANG </h3>
          <p> Daftar Data Ruang Rusunawa Kota Malang</p>
        </div>
        
        <button type="button" class="btn" style="color:white; background-color:#5CB874" data-bs-toggle="modal"
          data-bs-target="#exampleModal">
          <a href="/ruang" style="color:white; background-color:#5CB874">Tambah Data </a>
        </button>
      </div>

      <!--Tabel-->
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
                        <td> <button type="button" class="btn btn-sm btn-{{ $item->is_dipakai == 0 ? "danger" : "success" }}">{{ $item->is_dipakai == 0 ? "Kosong" : "Terisi" }}</button> </td>
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
