@extends('layouts.main')

@section('content')
        <div class="container">
            <div class="row py-10">
                <div class="col-md-12">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-10 bg-white rounded">
                            <div class="table-responsive">
                                <table id="table-data" class="table table-bordered table-striped table-siswa">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" style="width: max-content;">No.</th>
                                            <th rowspan="2" class="header" style="width: max-content;">Nama</th>
                                            <th rowspan="2" class="header" style="width: max-content;">Kode Ruang</th>
                                            <th rowspan="2" class="header" style="width: max-content;">No Hp</th>
                                            <th colspan="12" class="text-center">Bulan</th>
                                        </tr>
                                        <tr class="table-row-head">
                                            <th>Sudah Bayar</th>
                                            <th>Belum Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body-content">
                                        <tr data-id="001">
                                            <td>1.</td>
                                            <td>Raib</td>
                                            <td>50</td>
                                            <td>082232097234</td>
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
@stop
