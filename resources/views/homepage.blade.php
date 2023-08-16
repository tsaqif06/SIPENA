@extends('layouts.main')

@section('content')
    {{--  <!-- ======= Hero Section ======= -->  --}}
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Selamat Datang di
                            </h2>
                            <h2 class="animate__animated animate__fadeInDown">
                                <span> SI - PENA</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Sistem Informasi Pembayaran Sewa Rusunawa Kota Malang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  <!-- End Hero -->  --}}

    <main id="main">

        {{--  <!-- ======= Services Section ======= -->  --}}
        <section id="informasi" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Informasi</h2>
                </div>
                <div class="section-card">
                    <div class="row">
                        <div class="section-card">
                            <div class="card  mb-5">
                                <div class="card-body">
                                    <p>Rumah susun sederhana sewa (RUSUNAWA) Pemerintah Kota Malang, dalam hal ini di bawah
                                        naungan Dinas Pekerjaan Umum Penataan Ruang, Perumahan dan Kawasan Permukiman
                                        (DPUPRPKP) Kota Malang, merupakan bangunan gedung bertingkat, lingkungan yang
                                        terbagi dalam bagian-bagian yang di strukturkan secara fungsional dalam arah
                                        horizontal maupun vertikal, dan merupakan satu kesatuan yang masing-masing digunakan
                                        secara terpisah dalam status penguasaan sewanya.</p>
                                    <p>Ada 2 gedung bangunan RUSUNAWA yang dikelolah oleh DPUPRPKP Kota Malang, RUSUNAWA 1
                                        di jalan Mayjen Sungkono, Buring, Kec. Kedungkandang, sebelah selatan jembatan
                                        Kedungkandang arah barat, dan RUSUNAWA 2 di jalan Simpang Gading, Buring, nomer 01
                                        belakang GOR Ken Arok Kec. Kedungkandang, Kota Malang, Jawa Timur 65135</p>
                                    <p>Bangunan RUSUNAWA ini mempunyai fasilitas umum yakni ruang serba guna, mushola, ruang
                                        komersil, ruang parkir motor, ruang panel, ruang pengelola, gedung, ruang penjaga,
                                        selain itu juga ada ruang hunian bagi difabel di lantai 1. Tiap hunian terdiri dari
                                        ruang tamu, kamar tidur, kamar mandi/wc, dapur dan jemuran.</p>
                                    <div>
                                        <p>Adapun yang berhak menjadi penghuni RUSUNAWA DPUPRPKP Kota Malang adalah dengan
                                            syarat sebagai berikut :</p>
                                        <p>&#8211; MBR (Masyarakat berpenghasilan rendah).</p>
                                        <p>&#8211; KTP kota Malang</p>
                                        <p>&#8211; Sudah berkeluarga</p>
                                        <p>&#8211; Surat keterangan belum memiliki Rumah</p>
                                        <p>Untuk memudahkan informasi pelayanan bagi penghuni/calon penghuni dapat
                                            menghubungi wa center <a href="https://wa.me/62895372233322"
                                                class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                                target="blank">0895372233322</a></p>

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <h4 class="fw-bold text-center">
                                        Persyaratan Pendaftaran Penghuni Rusunawa
                                    </h4>
                                    <p>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Foto Kartu Tanda Penduduk (KTP) Permohonan suami dan istri
                                        </li>
                                        <li class="list-group-item">Foto Kartu Keluarga (C1)</li>
                                        <li class="list-group-item">Foto surat nikah / Akte cerai / Surat Keterangan
                                            Kematian</li>
                                        <li class="list-group-item">Surat Keterangan belum memiliki rumah / Tempat tinggal
                                            dari Pemerintah Desa /
                                            Kelurahan dan diketahui Camat</li>
                                        <li class="list-group-item">Surat Keterangan memiliki penghasilan / pendapatan tetap
                                            yang diketahui Pemerintah Desa / Kelurahan dan diketahui Camat atau surat
                                            keterangan penghasilan dari instansi
                                            / Perusahaan tempat bekerja</li>
                                        <li class="list-group-item">Surat Keterangan Catatan Kepolisian (SKCK) dilegalisir
                                        </li>
                                        <li class="list-group-item">Pas foto berwarna Pemohon atau Suami dan Istri ukur an
                                            4x6</li>
                                        <li class="list-group-item">Rekomendasi dari Dinas Sosial Kota Malang untuk hunian
                                            diffable</li>
                                        <li class="list-group-item">Surat pernyataan sanggup membayar sewa dan retribusi
                                            yang berlaku di Rusunawa
                                            diketahui Pemerintah Desa / Kelurahan dan diketahui Camat</li>
                                        <li class="list-group-item">Surat permohonan huni Rusunawa. <span
                                                class="text-succes"><a
                                                    href="/assets/pdf/SURAT PERMOHONAN HUNI RUSUNAWA.pdf"
                                                    target="blank">Klik di sini untuk unduh format surat.</a></span></li>
                                        <li class="list-group-item">Surat pernyataan sanggup membayar sewa dan retribusi
                                            yang berlaku di Rusunawa
                                            diketahui Pemerintah Desa / Kelurahan dan diketahui Camat. <span
                                                class="text-succes"><a
                                                    href="/assets/pdf/SURAT PERNYATAAN KESANGGUPAN MEMBAYAR.pdf"
                                                    target="blank">Klik di sini untuk unduh format surat.</a></span></li>
                                        <li class="list-group-item">Surat pernyataan bersedia memenuhi ketentuan yang
                                            berlaku bermaterei cukup. <span class="text-succes"><a
                                                    href="../assets/pdf/SURAT PERNYATAAN BERSEDIA MEMATUHI PERATURAN.pdf"
                                                    target="blank">Klik di sini untuk unduh format surat.</a></span></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    {{--  <iframe src="/assets/pdf/SURAT KELENGKAPAN PENGAJUAN RUSUNAWA.pdf" width=100%
                                        height=500></iframe>  --}}
                                    <iframe width="100%" height="500"
                                        src="https://docs.google.com/document/d/e/2PACX-1vSwGUZ0hKN0N4MTjQjdHTL-0A8xgxYSmrKUv4J4y-i1vlAvx_yLjp9W4UOmM_k6f5RbYU4wTC4saJFG/pub?embedded=true"></iframe>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="harga" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Harga Sewa</h2>
                    <p>
                        Semua tarif sewa ini belum termasuk tagihan air, listrik, dan pelayanan sampah dan pengolahan limbah
                        cair
                    </p>
                </div>

                <div class="row">
                    <div class="card-deck">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 1</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 75.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 2</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 175.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 3</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 150.000,-</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 4</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 125.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 5</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 100.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Sewa Komersil</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 500.000,-</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  <!-- End Services Section -->  --}}



        <section id="lokasi" class="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 stretch-card grid-margin">
                        <div class="container p-4">
                            <div class="section-title">
                                <h2>Lokasi 1</h2>
                                <p>
                                    Rusunawa Buring 1 Kota Malang, Jl. Mayjen Sungkono, Buring, Kec. Kedungkandang, Kota
                                    Malang, Jawa Timur 65136
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex align-items-stretch">
                                    <div class="info">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0263162664046!2d112.6456875!3d-7.996219099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62873624240c9%3A0x93d39e7ea255b3f0!2sRusunawa%20Buring%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1691229318994!5m2!1sid!2sid"
                                            frameborder="0" style="border: 0; width: 100%; height: 290px"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 stretch-card grid-margin">
                        <div class="container p-4">
                            <div class="section-title">
                                <h2>Lokasi 2</h2>
                                <p>
                                    Rusunawa Buring 2 Kota Malang, Jl. Simpang Gading, Buring, Kec. Kedungkandang, Kota
                                    Malang, Jawa Timur 65135

                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex align-items-stretch">
                                    <div class="info">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.891825763362!2d112.64201271024027!3d-8.01009099198274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd627dd134c056d%3A0xdf0cae334e302be8!2sRUSUNAWA%20BURING%202!5e0!3m2!1sid!2sid!4v1692073115798!5m2!1sid!2sid"
                                            width="100%" height="290" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  <!-- End Contact Section -->  --}}
    </main>
    {{--  <!-- End #main -->  --}}
@endsection
