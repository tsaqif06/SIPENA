<!doctype html>
<html lang="en">

<head>
    <title>SIPENA | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/assets/img/logofinal.png" />

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="/assets/css/login.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session()->has('failed'))
                <div class="alert alert-danger" role="alert">
                    {{ session('failed') }}
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="/assets/img/logosipenafinal.png" alt="" class="img-fluid" />
                        </div>
                        <h3 class="text-center mb-4">Sistem Informasi Pembayaran Sewa Rusunawa Kota Malang </h3>
                        <form action="/login" method="post" class="login-form">
                            @csrf
                            <div class="form-group">
                                <input type="email"
                                    class="form-control rounded-left @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" autofocus required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" id="password" required>
                                <i class="bi bi-eye position-absolute"
                                    style="
						right: 10px;
						top: 50%;
						transform: translateY(-50%);
						cursor: pointer;
					"
                                    id="password-toggle"></i>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary" for="remember">Ingat Saya
                                        <input type="checkbox" id="remember" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Masuk</button>
                            </div>
                        </form>
                    </div>
                    <h6 class="d-block text-center mt-5 text-muted">Belum Mendaftar?
                        <a href="/register">Daftar Sekarang!</a>
                    </h6>
                    <h6 class="d-block text-center text-muted">Sudah punya ruang, tapi belum terdaftar?
                        <a href="/login/penghuni">Klik Disini!</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const passwordInput = document.querySelector('input[name="password"]');
        const passwordToggle = document.querySelector("#password-toggle");

        passwordToggle.addEventListener("click", function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggle.classList.remove("bi-eye");
                passwordToggle.classList.add("bi-eye-slash");
            } else {
                passwordInput.type = "password";
                passwordToggle.classList.remove("bi-eye-slash");
                passwordToggle.classList.add("bi-eye");
            }
        });
    </script>
</body>

</html>
