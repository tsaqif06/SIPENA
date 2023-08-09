<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>SIPENA | Register</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/logofinal.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column min-vh-100 section-bg">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="index.html" class="logo me-auto"><img src="../assets/img/logosipenafinal.png" alt=""
                        class="img-fluid" /></a>
            </h1>

            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->



    <main id="main">
        <section class="featured-services section-bg">
            <div class="container">
                <div class="row">
                    <div class="container rounded bg-white mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                        class="rounded-circle mt-5" width="150px" src="../assets/img/iconaccount.png">
                                </div>
                            </div>
                            <div class="col-md-9 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Registrasi Akun</h4>
                                    </div>
                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="row mt-2">
                                            <div class="col-md-12"><label class="labels">Nama</label><input
                                                    type="text"
                                                    class="form-control @error('nama') is-invalid @enderror"
                                                    placeholder="Nama" name="nama"></div>
                                        </div>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-md-12">
                                            <label class="labels">Tempat Lahir</label>
                                            <input type="text"
                                                class="form-control @error('tempatlahir') is-invalid @enderror"
                                                placeholder="Tempat Lahir" name="tempatlahir">
                                        </div>
                                        @error('tempatlahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-md-12">
                                            <label class="labels">Tanggal Lahir</label>
                                            <input type="date"
                                                class="form-control @error('tanggallahir') is-invalid @enderror"
                                                name="tanggallahir">
                                        </div>
                                        @error('tanggallahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-md-12">
                                            <label class="labels">Alamat</label>
                                            <input type="text"
                                                class="form-control @error('alamat') is-invalid @enderror"
                                                placeholder="Alamat" name="alamat">
                                        </div>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-md-12">
                                            <label class="labels">Pekerjaan</label>
                                            <input type="text"
                                                class="form-control @error('pekerjaan') is-invalid @enderror"
                                                placeholder="Pekerjaan" name="pekerjaan">
                                        </div>
                                        @error('pekerjaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-md-12">
                                            <label class="labels">No. HP</label>
                                            <input type="text"
                                                class="form-control @error('notelp') is-invalid @enderror"
                                                placeholder="No. HP" name="notelp">
                                        </div>
                                        @error('notelp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-md-12">
                                            <label class="labels">Jumlah Anggota Keluarga</label>
                                            <input type="number"
                                                class="form-control @error('jmlkeluarga') is-invalid @enderror"
                                                placeholder="Jumlah Anggota Keluarga" name="jmlkeluarga">
                                        </div>
                                        @error('jmlkeluarga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-md-12">
                                            <label class="labels">Email</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" name="email">
                                        </div>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                        <div class="col-md-12">
                                            <label class="labels">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password">
                                        </div>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                        <div class="mt-5 text-center d-grid gap-2">
                                            <button class="btn" type="submit"
                                                style="color:white; background-color:#5CB874">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="mt-auto" id="footer">
        <div class="container">
            <h3>
                <a href="index.html" class="logo me-auto"><img src="../assets/img/logosipenafinal.png"
                        alt="" class="img-fluid" style="height: 50px" /></a>
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
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/datatable.js"></script>
</body>

</html>
