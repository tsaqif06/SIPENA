@extends('layouts.main')

@section('content')
    <main id="main">
        <section>

            <div class="container mt-3">
                <div class="bg-white border rounded-5">
                    <div class="w-100 p-4" style="background-color: #ffffff; border-radius: 10px;">
                        <div class="row">
                            <div class="pb-0">
                                <h3 style="font-weight:700;"> Pembayaran Rusunawa </h3>
                                <p> Pembayaran Sewa Rusunawa Kota Malang</p>
                            </div>
                            @if ($ruang == null)
                                <div class="alert alert-danger" role="alert">
                                    Anda Belum Punya Ruang Yang Ditempati, Tidak Bisa Melakukan Pembayaran Sekarang!
                                </div>
                            @endif
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Detail Pembayaran </h4>
                                            </div>
                                            <form action="/pembayaran/checkout" method="post">
                                                @csrf
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <label class="labels">Nama</label>
                                                        <input type="text" name="nama" class="form-control"
                                                            value="{{ $ruang->user->nama ?? '-' }}" readonly>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="labels">No telepon</label>
                                                        <input type="number" class="form-control" name="notelp"
                                                            value="{{ $ruang->user->notelp ?? '0' }}" readonly>
                                                    </div>
                                                    <div class="col-md-12"><label class="labels">Bulan </label>
                                                        <select class="form-select" name="bulan" aria-label="Default select example">
                                                            @foreach ($bulan as $key => $value)
                                                                @if (!isset($bayar[$key]))
                                                                    @if ($bayar['bulanSekarang'] == $value)
                                                                        <option value="{{ $key }}" selected>
                                                                            {{ $value }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $key }}">
                                                                            {{ $value }}
                                                                        </option>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="labels">Kode Ruang</label>
                                                        <input name="koderuang" type="text" class="form-control"
                                                            value="{{ $ruang->koderuang ?? '-' }}" readonly>
                                                    </div>
                                                    <div class="col-md-12"><label class="labels">Harga Sewa
                                                        </label><input type="text" class="form-control"
                                                            value="{{ isset($ruang->harga) ? 'Rp.' . number_format($ruang->harga, 0, ',', '.') : 'Rp.0' }}"
                                                            name="harga" readonly>
                                                    </div>
                                                    <div class="col-md-12"><label class="labels"> PDAM</label><input
                                                            type="text" class="form-control" name="pdam"
                                                            value="{{ isset($ruang->harga) ? 'Rp.' . number_format($bayar['pdam'], 0, ',', '.') : 'Rp.0' }}"
                                                            readonly></div>
                                                    <div class="col-md-12"><label class="labels"> Total
                                                        </label><input type="text" class="form-control"
                                                            value="{{ isset($ruang->harga) ? 'Rp.' . number_format($bayar['totalbayar'], 0, ',', '.') : 'Rp.0' }}"
                                                            name="totalbayar" readonly>
                                                    </div>
                                                    <button class="btn btn-success my-3" type="submit">Checkout</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
