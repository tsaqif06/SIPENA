@extends('layouts.main')

@section('content')

    <section>
        <div class="container">
            <div class="pb-0">
                <h3 style="font-weight:700;"> REKAP PEMBAYARAN </h3>
                <p> Daftar Rekap Pembayaran Rusunawa Kota Malang</p>

                <button type="button" class="btn" style="color:white; background-color:#5CB874" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Tambah data
                </button>
            </div>

            <!--modal tambah data-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Rekap Pembayaran Sewa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group ; mb-3">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control" id="Nama" name="Nama"
                                        placeholder="Nama" required />
                                </div>
                                <div class="form-group, mb-3">
                                    <label for="KodeRuang">Kode Ruang</label>
                                    <input type="text" class="form-control" id="KodeRuang" name="KodeRuang"
                                        placeholder="Kode Ruang" required />
                                </div>
                                <div class="form-group; mb-3">
                                    <label for="NoHP">No Hp</label>
                                    <input type="number" class="form-control" id="NoHp" name="NoHp"
                                        placeholder="No Hp" required />
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
        </div>
        <br>

        <div class="container">
            <div class="row py-10">
                <div class="col-md-12">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-10 bg-white rounded">
                            <div class="table-responsive">
                                <table id="table-data" class="table table-bordered table-striped table-siswa">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" style="min-width:100px;">Aksi</th>
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
                                            <td>
                                                <button class="button-arounder">
                                                    <span class="material-symbols-outlined"> edit </span>
                                                </button>
                                                <button class="button-arounder" onclick="BtnDel(this)">
                                                    <span class="material-symbols-outlined"> delete </span>
                                                </button>
                                            </td>
                                            <td>1.</td>
                                            <td>Raib</td>
                                            <td>50</td>
                                            <td>082232097234</td>
                                        </tr>
                                        <tr data-id="002">
                                            <td>
                                                <button class="button-arounder">
                                                    <span class="material-symbols-outlined"> edit </span>
                                                </button>
                                                <button class="button-arounder" onclick="BtnDel(this)">
                                                    <span class="material-symbols-outlined"> delete </span>
                                                </button>
                                            </td>
                                            <td>2.</td>
                                            <td>Seli</td>
                                            <td>20</td>
                                            <td>082232087134</td>
                                        </tr>
                                        <tr data-id="003">
                                            <td>
                                                <button class="button-arounder">
                                                    <span class="material-symbols-outlined"> edit </span>
                                                </button>
                                                <button class="button-arounder" onclick="BtnDel(this)">
                                                    <span class="material-symbols-outlined"> delete </span>
                                                </button>
                                            </td>
                                            <td>3.</td>
                                            <td>Lail</td>
                                            <td>10</td>
                                            <td>082232087234</td>
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
