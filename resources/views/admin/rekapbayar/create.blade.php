@extends('layouts.main')

@section('content')
    {{--  <!--modal tambah data-->  --}}
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
                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama"
                            required />
                    </div>
                    <div class="form-group, mb-3">
                        <label for="KodeRuang">Kode Ruang</label>
                        <input type="text" class="form-control" id="KodeRuang" name="KodeRuang" placeholder="Kode Ruang"
                            required />
                    </div>
                    <div class="form-group; mb-3">
                        <label for="NoHP">No Hp</label>
                        <input type="number" class="form-control" id="NoHp" name="NoHp" placeholder="No Hp"
                            required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn" style="color:white; background-color:#5CB874">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@stop
