@extends('layouts.main')

@section('content')
    <main id="main">
        <section>
            <div class="container">
                <div class="row">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="card-header text-white fw-bold" style="color:white; background-color:#5CB874">
                                INVOICE PEMBAYARAN
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="fw-bold">Detail Pembayaran Bulan ini</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Nama</label><input type="text"
                                            class="form-control" placeholder="xxx" value="" disabled></div>
                                    <div class="col-md-12"><label class="labels">No telepon</label><input type="text"
                                            class="form-control" value="" placeholder="xxx" disabled></div>
                                    <div class="col-md-12"><label class="labels">Bulan </label><input type="text"
                                            class="form-control" value="" placeholder="xxx" disabled></div>
                                    <div class="col-md-12"><label class="labels">Kode Ruang</label><input type="text"
                                            class="form-control" value="" placeholder="xxx" disabled></div>
                                    <div class="col-md-12"><label class="labels"> Total </label><input type="text"
                                            class="form-control" value="" placeholder="xxx" disabled></div>
                                    <div class="col-md-12"><label class="labels"> Status </label><input type="text"
                                            class="form-control" value="" placeholder="SUKSES"
                                            style="background-color:#e2ffe9" disabled></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!--kalau belum isi di awal-->


            <!--kalau sudah isi di awal-->

        </section>
    </main>

@stop
