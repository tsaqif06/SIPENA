@extends('layouts.main')

@section('content')

<<<<<<< HEAD
    {{-- TEMPLATE (delete and replace this template) --}}
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 400px;">
        <h1>User : Rekap Ruang</h1>
    </div>
=======
<main id="main">
    <section class="featured-services section-bg">
      <div class="container">
        <div class="pb-0">
          <h3 style="font-weight:700;"> REKAP RUANG </h3>
          <p> Daftar Data Ruang Rusunawa Kota Malang</p>
        </div>
      </div>
      <br>

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
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td> 1. </td>
                        <td> <button type="button" class="btn btn-sm btn-success">Terisi</button> </td>
                        <td>Imron</td>
                        <td> L1 F14</td>
                      </tr>
                      <tr>
                        <td> 2. </td>
                        <td> <button type="button" class="btn btn-sm btn-info text-white">Tersedia</button> </td>
                        <td>Hamdan</td>
                        <td> L2 L21</td>
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
  </main>
>>>>>>> main

@endsection