@extends ('layouts.main')

@section('content')
    <main id="main">
        <section>
            <div class="container">
                <div class="pb-0">
                    <h3 style="font-weight:700;"> REKAP RUANG </h3>
                    <p> Daftar Data Ruang Rusunawa Kota Malang</p>
                </div>
                <a href="/ruang/create"><button type="button" class="btn mb-3" style="color:white; background-color:#5CB874" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Tambah Data
              </button></a>
            </div>

            <!--Tabel-->
            <div class="container">
                <div class="row py-10">
                    <div class="col-md-12">
                        @if (Session::has('status'))
                            <div style="width: 400px" class="alert alert-success alert-dismissible fade show mt-3"
                                role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card rounded shadow border-0">
                            <div class="card-body p-10 bg-white rounded">
                                <div class="table-responsive">
                                    <table id="table-data" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Status </th>
                                                <th> Nama </th>
                                                <th> Kode Ruang </th>
                                                <th> Rusunawa </th>
                                                <th> Lantai </th>
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
                                                    <td>{{ $item->user->nama ?? 'Kosong' }}</td>
                                                    <td>{{ $item->koderuang }}</td>
                                                    <td>{{ $item->rusunawa }}</td>
                                                    <td>{{ $item->lantai_id }}</td>
                                                    <td>
                                                        <button class="button-arounder">
                                                            <span class="material-symbols-outlined"><a class="no-decoration"
                                                                    href="ruang/{{ $item->id }}/edit"> edit </a></span>
                                                        </button>
                                                        <form action="/ruang/{{ $item->id }}" method="POST"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="button-arounder" type="submit"
                                                                onclick="return confirm('Apakah Anda Yakin?')">
                                                                <span class="material-symbols-outlined"> delete </span>
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
        </section>
    </main>
@endsection
