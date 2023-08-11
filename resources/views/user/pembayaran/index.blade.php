@extends('layouts.main')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>SIPENA</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link rel="shortcut icon" type="image/png" href="../assets/img/logofinal.png" />

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

        <!-- data table bootsrap -->

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/tablestyle.css">
        <link href="../assets/css/style.css" rel="stylesheet">
        </style>
    </head>

    <body class="d-flex flex-column min-vh-100 section-bg">
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center">
                <h1 class="logo me-auto">
                    <a href="berandaadmin.html" class="logo me-auto"><img src="../assets/img/logosipenafinal.png"
                            alt="" class="img-fluid" /></a>
                </h1>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li>
                            <a class="nav-link" href="userberanda.html">Dasbor</a>
                        </li>
                        <li>
                            <a class="nav-link" href="usertabelruang.html">Rekap Ruang</a>
                        </li>
                        <li>
                        <li><a class="nav-link active" href="userpembayaran.html">Pembayaran</a>
                        </li>
                        <li><a class="nav-link" href="userrekappembayaran.html">Rekap Pembayaran</a>
                        </li>
                        <li><a class="nav-link" href="usersewa.html">Penyewaan</a>
                        </li>
                        <li>
                            <a class="nav-link" href="userketentuan.html">Ketentuan</a>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>


                <!-- .navbar -->
            </div>
        </header>


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
                                <div class="col-md-7">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h4 class="text-right">Detail Pembayaran </h4>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12"><label class="labels">Nama</label><input
                                                            type="text" class="form-control" placeholder="Fido"
                                                            value="" disabled></div>
                                                    <div class="col-md-12"><label class="labels">No telepon</label><input
                                                            type="text" class="form-control" value=""
                                                            placeholder="081254389" disabled></div>
                                                    <div class="col-md-12"><label class="labels">Bulan </label><input
                                                            type="text" class="form-control" value=""
                                                            placeholder="Agustus" disabled></div>
                                                    <div class="col-md-12"><label class="labels">No.
                                                            Bangunan</label><input type="text" class="form-control"
                                                            value="" placeholder="L21" disabled></div>
                                                    <div class="col-md-12"><label class="labels">Harga Sewa </label><input
                                                            type="text" class="form-control" value=""
                                                            placeholder="Rp. 125.000" disabled></div>
                                                    <div class="col-md-12"><label class="labels"> PDAM</label><input
                                                            type="text" class="form-control" value=""
                                                            placeholder="Rp.50.000" disabled></div>
                                                    <div class="col-md-12"><label class="labels"> Total </label><input
                                                            type="text" class="form-control" value=""
                                                            placeholder="Rp.175.000" disabled></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-12 ps-md-5 p-0 ">
                                    <div class="box-left">
                                        <div class="container">
                                            <p class="h7 fw-bold mb-1">Pembayaran</p>
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card border-0"> <input class="form-control ps-5"
                                                                type="text" placeholder="No. Rek"></span> </div>
                                                    </div>
                                                    <div class="col-6"> <input class="form-control my-3" type="date">
                                                    </div>
                                                    <div class="col-6"> <input class="form-control my-3" type="text"
                                                            placeholder="KODE CVV"> </div>
                                                    <div class="col-12">
                                                        <div class="card border-0"> <input class="form-control ps-5"
                                                                type="text" placeholder="NAMA PEMILIK KARTU"> </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 text-center d-grid gap-2">
                                                    <button type="button" class="btn"
                                                        style="color:white; background-color:#5CB874">
                                                        <span class="fas fa-dollar-sign ms-2"></span>Bayar<span
                                                            class="ms-3 fas fa-arrow-right"></span>
                                                    </button>
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
        <!-- Modal -->
        <div class="modal fade" id="modalbayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn"
                                style="color:white; background-color:#5CB874">Bayar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{--  <!-- ======= Footer ======= -->  --}}
        <footer class="mt-auto" id="footer">
            <div class="container">
                <h3>
                    <a href="#" class="logo me-auto"><img src="../assets/img/logosipenafinal.png" alt=""
                            class="img-fluid" style="height: 50px" /></a>
                </h3>
                <p>
                    Sistem Informasi Pembayaran Sewa Rusunawa Kota Malang
                </p>
                <div class="copyright">
                    &copy; Copyright <strong><span>SIPENA</span></strong>. All Rights Reserved
                </div>
                <div class="credits"></div>
            </div>
        </footer>
        {{--  <!-- End Footer -->  --}}

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </body>

    </html>
@stop
