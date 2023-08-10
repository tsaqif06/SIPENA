@extends('layouts.main')

@section('content')
    <section>
        <div class="container">
            <div class="pb-0">
                <div class="row">
                    <h3 style="font-weight:700;"> REKAP PEMBAYARAN SAYA</h3>
                </div>

                <a href="/rekapbayar/create" class="btn" style="color:white; background-color:#5CB874">
                    Tambah data
                </a>
            </div>
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
                                            <th rowspan="2">Aksi</th>
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
                                        <tr>
                                            <td>
                                                <button class="button-arounder">
                                                    <span class="material-symbols-outlined"> edit </span>
                                                </button>
                                                <button class="button-arounder" onclick="BtnDel(this)">
                                                    <span class="material-symbols-outlined"> delete </span>
                                                </button>
                                            </td>
                                            @foreach ($rekapbayars as $rekapbayar)
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rekapbayar->user->nama }}</td>
                                                <td>{{ $rekapbayar->user->nama }}</td>
                                                <td>{{ $rekapbayar->user->notelp }}</td>
                                                <td>{{ $rekapbayar->jan }}</td>
                                                <td>{{ $rekapbayar->feb }}</td>
                                                <td>{{ $rekapbayar->mar }}</td>
                                                <td>{{ $rekapbayar->apr }}</td>
                                                <td>{{ $rekapbayar->mei }}</td>
                                                <td>{{ $rekapbayar->jul }}</td>
                                                <td>{{ $rekapbayar->jun }}</td>
                                                <td>{{ $rekapbayar->aug }}</td>
                                                <td>{{ $rekapbayar->sep }}</td>
                                                <td>{{ $rekapbayar->okt }}</td>
                                                <td>{{ $rekapbayar->nov }}</td>
                                                <td>{{ $rekapbayar->des }}</td>
                                            @endforeach
                                        </tr>
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
