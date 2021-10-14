<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS - Login</title>
    <link rel="shortcut icon" href="{{ asset('image/logo/bn.jpg') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* text-align: center; */
            min-height: 100vh;
        }
        .style {
            font-size: 20px;
        }
        .login, .address, .style {
            color: #3366cc;
        }
        .address {
            font-size: 20px;
        }
        /* image */
        .sample {
            width: 100%;
            height: auto;
            background-image: url('{{ asset('image/img/sample.jpg')}}');
            background-repeat: no-repeat;
            background-size: fill;
            position: relative;
        }
    </style>
</head>

<body class="login-page">
    {{-- <div class="container" style="margin-top: -250px;">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 text-center">
                                <img src="{{ asset('image/logo/bn.jpg') }}" class="img-fluid rounded" width="120%">
                            </div>
                            <div class="col-10"><br>
                                <b>
                                    <h6 class="mb-1">REQUIREMENTS FOR INCOMING GRADE 7, TRANSFEREES AND BALIK
                                            ARAL</h6>
                                    <p class="mb-0">Copy of Latest Grades &middot; Copy of Good Moral
                                        Certificate &middot; Copy of PSA Birth
                                        Certificate</p>
                                    <address class="mb-0">
                                        <i class="fa fa-phone address"></i>&nbsp;&nbsp;0917-112-7716&nbsp;&nbsp;
                                        <i class="fa fa-at address"></i>&nbsp;&nbsp;302016@deped.gov.ph&nbsp;&nbsp;
                                        <i class="fab fa-facebook address"></i>&nbsp;&nbsp;@balaogannationalhighschool  
                                    </address>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="login-box" id="app">
        <div class="card card-outline card-primary shadow-sm ">
            <div class="card-body">
                <h4 class="login text-center"><b>Login</b></h4><hr style="border-color: #3366cc;">
                <p class="login-box-msg">Sign in to start your session</p>
                <div class="col-12">
                    @if (session()->has('msg'))
                        <div class="alert alert-danger text-center" role="alert" style="color: white;">
                            {{ session('msg') }}
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{ route('auth.login_post') }}" class="needs-validation" novalidate="" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="get_your_input">Username | ID No.</label>
                        <input id="get_your_input" type="text" class="form-control" name="get_your_input" tabindex="1" required autofocus autocomplete="off">
                        <div class="invalid-feedback">
                            Please fill this field [username or ID No.]
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required autocomplete="off">
                        <div class="invalid-feedback">
                            Please fill in your password
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form><hr style="border-color: #3366cc;">
                <div class="row">
                    <div class="col-6">
                        <a href="/appoint/register" class="btn btn-block text-black">
                            <i class="far fa-calendar-alt style"></i><br> Get Appointment
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/welcome" class="btn btn-block text-black ">
                            <i class="far fa-id-card style"></i><br> Pre Enrollment
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><br>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>