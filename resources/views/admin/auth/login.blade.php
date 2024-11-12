<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" href="/template/admin/img/favicon.png">
    <!-- Custom fonts for this template-->
    <link href="/template/admin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/template/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img width="100%" src="https://img.pikbest.com/origin/06/01/50/24xpIkbEsT4Rf.jpg!w700wp" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Chào mừng</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="sdt" placeholder="Số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="mat_khau" placeholder="Mật khẩu">
                                        </div>
                                        <button class="btn btn-success btn-user btn-block">
                                            Đăng nhập
                                        </button>
                                        @csrf
                                    </form>
                                    <hr>
                                    <a href="/auth/google" class="btn btn-danger btn-user btn-block rounded-pill">
                                        Đăng nhập bằng Google
                                    </a>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/auth/registry">Tạo tài khoản</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('sweetalert::alert')
    <!-- Bootstrap core JavaScript-->
    <script src="/template/admin/jquery/jquery.min.js"></script>
    <script src="/template/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/template/admin/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/template/admin/js/sb-admin-2.min.js"></script>
</body>

</html>
