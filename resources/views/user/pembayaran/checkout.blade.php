@php
    Carbon\Carbon::setLocale('id');
@endphp

@extends('layouts.main')

@section('content')
    <main id="main">
        <section>
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 shadow p-3 mb-5 bg-white rounded">
                        <div class="w-100 p-4" style="background-color: #ffffff; border-radius: 10px;">
                            <div class="row">
                                <div class="pb-0 text-center">
                                    <img src="../assets/img/logosipenafinal.png" alt="" class="img-fluid"
                                        style="height: 50px;">
                                    <h4 style="font-weight:700;"> Pembayaran Rusunawa </h4>
                                    <p> Pembayaran Sewa Rusunawa Kota Malang</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-12">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Nama Penyewa</td>
                                                        <td style="color: #5CB874;">{{ $nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pembayaran Bulan</td>
                                                        <td style="color: #5CB874;">
                                                            {{ Carbon\Carbon::createFromFormat('M', $order->bulan)->isoFormat('MMMM') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Bayar</td>
                                                        <td style="color: #5CB874;">{{ $order->tanggalbayar }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Ruang</td>
                                                        <td style="color: #5CB874;">{{ $koderuang }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga Sewa</td>
                                                        <td style="color: #5CB874;">{{ $harga }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PDAM</td>
                                                        <td style="color: #5CB874;">{{ $pdam }}</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot class="fw-bold">
                                                    <tr>
                                                        <td>Total</td>
                                                        <td style="color: #5CB874;">
                                                            {{ 'Rp.' . number_format($order->totalbayar, 0, ',', '.') }}
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="mt-5 text-center d-grid gap-2">
                                                <div id="pay-button" class="btn"
                                                    style="color:white; background-color:#5CB874">
                                                    <span class="fas fa-dollar-sign ms-2"></span>Bayar<span
                                                        class="ms-3 fas fa-arrow-right"></span>
                                                </div>
                                            </div>
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


    <script type="text/javascript">
        const payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    window.location.href = '/pembayaran/invoice/{{ $order->id }}'
                },
                onPending: function(result) {
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
@stop
