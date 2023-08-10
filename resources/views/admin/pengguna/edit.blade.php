@extends('layouts.main')

@section('content')
    <main id="main">
        {{--  <!-- ======= Featured Services Section ======= -->  --}}

        {{-- {{ $user }} --}}
        <section>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 style="color:#5CB874">Edit Data Pengguna</h4>
                        </div>
                        <form action="/pengguna/{{ $user->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <input type="hidden" class="form-control" id="id" name="id"
                                        value="{{ $user->id }}" <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="nama" value="{{ $user->nama }}" required />
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"
                                        placeholder="tempat lahir" value="{{ $user->tempatlahir }}" required />
                                    @error('tempatlahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir"
                                        placeholder="tanggal lahir" value="{{ $user->tanggallahir }}" required />
                                    @error('tanggallahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="alamat" value="{{ $user->alamat }}" required />
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                        placeholder="pekerjaan" value="{{ $user->pekerjaan }}" required />
                                    @error('pekerjaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="notelp">No HP</label>
                                    <input type="text" class="form-control" id="notelp" name="notelp"
                                        placeholder="nomor telepon" value="{{ $user->notelp }}" required />
                                    @error('notelp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn"
                                    style="color:white; background-color:#5CB874">Edit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>





        {{-- @endif --}}
    @endsection
