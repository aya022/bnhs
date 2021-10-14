<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>eBNHS &mdash;</title>
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
            min-height: 90vh;
        }

        .full .ui-state-default {
            color: red;
            border: 1px solid red;
        }

        .vacant .ui-state-default {
            color: green;
            border: 1px solid green;
        }

        .not .ui-state-default {
            color: gray;
            border: 1px solid gray;
        }
    </style>
</head>

<body class="hold-transition  login-page">
    <div id="app"><br><br><br>
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline card-success shadow-sm">
                            <div class="card-body">
                                <h3>Appointment Slip</h3>
                                <h6>
                                    <span style="color: red;">*</span> Please take note or take a picture the appointment slip
                                </h6>
                                <h6>
                                    <i>This will serve as proof of your appointment slip.</i>
                                </h6><br>
                                <table class="table">
                                    <tr>
                                        <td width="35%"><b>Name</b></td>
                                        <td>{{$appointment->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <td width="35%"><b>Address</b></td>
                                        <td>{{$appointment->address }}</td>
                                    </tr>
                                    <tr>
                                        <td width="35%"><b>Date</b></td>
                                        <td>{{$appointment->set_date }}</td>
                                    </tr>
                                    <tr>
                                        <td width="35%"><b>Appoint No.</b></td>
                                        <td>{{$appointment->appoint_no }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="text-center">
                                                <a href="{{ route('auth.login') }}" class="btn btn-outline-secondary btn-block mt-2"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Back</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
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
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script> --}}
    <script src="{{ asset('js/appoint.js') }}"></script>
</body>

</html>