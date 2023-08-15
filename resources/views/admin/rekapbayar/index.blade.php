@extends('layouts.main')

@section('content')
    <section>
        <div class="container">
            <div class="pb-0">
                <div class="row">
                    <h3 style="font-weight:700;"> REKAP PEMBAYARAN SAYA</h3>
                    <p>Data Rekap Pembayaran Pengguna Kota Malang</p>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-wrap gap-3 align-items-center">
            <button type="button" class="btn text-white bg-green" id="selection-show">
                Kirim Notifikasi
            </button>
            <button type="button" class="btn text-white bg-green d-none" id="selection-submit">
                Submit
            </button>
            <p class="text-warning d-inline-block m-0 d-none" id="selection-tutor"><i
                    class="bi bi-info-circle-fill me-2"></i><b>Pilih</b> data pengguna yang akan dikirimi notifikasi!</p>
        </div>

        <br>

        <div class="container">
            <div class="row py-10">
                <div class="col-md-12">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-10 bg-white rounded">
                            <div class="table-responsive">
                                <table id="table-data" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="selection d-none"></th>
                                            <th rowspan="2">No.</th>
                                            <th rowspan="2">Nama</th>
                                            <th rowspan="2">Kode Ruang</th>
                                            <th rowspan="2">No Hp</th>
                                            <th colspan="12" class="text-center">Bulan</th>
                                        </tr>
                                        <tr>
                                            <th> Jan </th>
                                            <th> Feb </th>
                                            <th> Mar </th>
                                            <th> Apr </th>
                                            <th> Mei </th>
                                            <th> Jun </th>
                                            <th> Jul </th>
                                            <th> Ags </th>
                                            <th> Sep </th>
                                            <th> Okt </th>
                                            <th> Nov </th>
                                            <th> Des </th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body-content">
                                        @foreach ($rekapbayars as $rekapbayar)
                                            <tr>
                                                <td class="selection d-none" align="center" valign="middle">
                                                    <input type="checkbox" class="form-check-input m-0 d-block radio"
                                                        data-id="{{ $rekapbayar->user->id }}"
                                                        style="width: 1.5rem; height: 1.5rem; box-shadow: unset;">
                                                </td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rekapbayar->user->nama }}</td>
                                                <td>{{ $rekapbayar->ruang->koderuang }}</td>
                                                <td>{{ $rekapbayar->user->notelp }}</td>
                                                <td>{{ $rekapbayar->jan == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->feb == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->mar == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->apr == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->mei == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->jul == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->jun == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->aug == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->sep == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->okt == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->nov == null ? 'Belum Bayar' : 'Lunas' }}</td>
                                                <td>{{ $rekapbayar->des == null ? 'Belum Bayar' : 'Lunas' }}</td>
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

    <script src="/assets/js/rekapbayar.js"></script>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>
    <script src="/assets/js/jquery.js"></script>
@stop
