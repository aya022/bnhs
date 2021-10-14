<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS - Welcome Portal</title>
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
        .color-text {
            color: #3366cc;
        }
    </style>
</head>

<body class="hold-transition login-page">

    <div id="app">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-8 offset-xl-2 center-screen">

                        <div class="card card-outline card-primary">
                            <div class="card-body p-5">
                                <h5 class="color-text"><b>BNHS ONLINE PRE-ENROLLMENT (Pre-registration)</b></h5>
                                <hr style="border-color: #3366cc;">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-5 text-center">
                                            <img src="{{ asset('image/logo/bn.jpg') }}" class="img-fluid rounded ">
                                        </div>
                                        <div class="col-lg-7"><br>
                                            <h5> <i>Dear <b>User</b>,</i></h5><br>
                                            <p>
                                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Welcome to our School new Admission Portal. Please fill in the form after this welcome message to apply for the school admission. Pleace complete and be accurate about the information you provide on the perspective field to avoid inconvinience. Plese read carefully and understand the form before you click the submit. 
                                                <br><br><b>Thank you</b>.
                                            </p>
                                            
                                            <br>
                                            <hr style="border-color: #3366cc;">
                                                
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="{{ route('auth.login') }}" class="btn btn-outline-secondary btn-block"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Back</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('form') }}" class="btn btn-outline-success btn-block"><i class="fas fa-check"></i>&nbsp;&nbsp;Proceed</a>
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
    </div>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>

</html>