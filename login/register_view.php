<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun SIMPRASKA</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="admin/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="login/login_view.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                                </a>
                                <p class="text-center">Silakan Lengkapi Data Berikut!</p>
                                <form method="post" action="proses_register.php">
                                    <div class="mb-3">
                                        <label for="InputNAR" class="form-label">NAR (sebagai username)</label>
                                        <input type="text" name="nar" required maxlength="10" class="form-control" id="InputNAR" aria-describedby="textHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="InputNama" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" required class="form-control" id="InputNama" aria-describedby="textHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="InputPassword" class="form-label">Password</label>
                                        <input type="password" name="password" required class="form-control" id="InputPassword">
                                    </div>
                                    <button type="submit" name="btn_daftar" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Daftar Akun</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Sudah punya akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="login/login_view.php">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>