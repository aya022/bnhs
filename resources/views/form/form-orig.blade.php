<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="shortcut icon" href="{{ asset('image/logo/bn.jpg') }}">
    <title>eBNHS - Admission</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Toast -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">

    <style>
        .login, .iconColor {
            color: #3366cc;
        }
        .backgroundColor {
            background-color: #fff;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div id="app">
        <div class="modal modal-outline shadow-sm fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title lead" id="staticBackdropLabel">Warning</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h5 class="txt text-danger"></h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                            <i class="fas fa-arrow-circle-left"></i>&nbsp;&nbsp;Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="container mt-2">
                <form id="enrollForm" autocomplete="off">@csrf
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-12 offset-lg-0 ">
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
                                                    <i class="fa fa-phone" style="color:  #0066ff;"></i>&nbsp;&nbsp;0917-112-7716&nbsp;&nbsp;
                                                    <i class="fa fa-at" style="color:  #0066ff;"></i>&nbsp;&nbsp;302016@deped.gov.ph&nbsp;&nbsp;
                                                    <i class="fab fa-facebook" style="color:  #0066ff;"></i>&nbsp;&nbsp;@balaogannationalhighschool  
                                                </address>
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-outline card-primary shadow-sm">
                                <div class="row m-0">
                                    <div class="col-12 col-md-12 col-lg-4 p-0">
                                        <div class="card-body">
                                            <h4 class="text-center login"><b>Enrollment Form</b></h4>
                                            <hr style="border-color: #3366cc;"> 
                                            <div class="form-group floating-addon">
                                                <label>LRN (Learner Reference Number)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text backgroundColor">
                                                            <i class="far fa-id-card iconColor"></i>
                                                        </div>
                                                    </div>
                                                    <input name="roll_no" type="text" class="form-control" autofocus
                                                        onkeypress="return numberOnly(event)" maxlength="12" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" class="form-control" id="">
                                                    <option value="new">Incoming grade 7</option>
                                                    <option value="new_eleven">Incoming grade 11</option>
                                                    <option value="transferee">Transferee</option>
                                                    <option value="balikAral">Balik Aral</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="forBalik">
                                                <label>Last school year attended</label>
                                                <input name="last_schoolyear_attended" type="text" class="form-control"
                                                    placeholder="eg. 2018-2019">
                                            </div>
                                            <div class="form-group floating-addon">
                                                <label>Grade level to Enroll</label>
                                                <select name="grade_level" class="form-control" id="">
                                                    <option></option>
                                                    <option value="7">Grade 7</option>
                                                    <option value="8">Grade 8</option>
                                                    <option value="9">Grade 9</option>
                                                    <option value="10">Grade 10</option>
                                                    <option value="11">Grade 11</option>
                                                    <option value="12">Grade 12</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="forcurriculum">
                                                <label>Curriculum</label>
                                                <select name="curriculum" class="form-control" required>
                                                    <option value=""></option>
                                                    <option value="STEM">STEM - Science Technology Engineering and
                                                        Mathematics</option>
                                                    <option value="BEC">BEC - Basic Education Curriculum</option>
                                                    <option value="SPA">SPA - Special Program Art</option>
                                                    <option value="SPJ">SPJ - Special Program Journalism</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="forStrand">
                                                <label>Strand & Specialization</label>
                                                <select name="strand" class="form-control">
                                                    <option value="">Select Strand</option>
                                                </select>
                                            </div>
                                            <div class="form-group floating-addon">
                                                <label>Last school attended</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text backgroundColor">
                                                            <i class="fa fa-graduation-cap iconColor" style="font-size: 13px"></i>
                                                        </div>
                                                    </div>
                                                    <input name="last_school_attended" type="text" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-8 p-0">

                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-lg-4">
                                                        <label>First name</label>
                                                        <input name="student_firstname" type="text" class="form-control"
                                                            required>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Middle name</label>
                                                        <input name="student_middlename" type="text"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Last name</label>
                                                        <input name="student_lastname" type="text" class="form-control"
                                                            placeholder="Last name, (extn)" required>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-lg-4">
                                                        <label>Date of Birth</label>
                                                        <input type="date" class="form-control" required
                                                            name="date_of_birth">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Gender</label>
                                                        <select name="gender" class="form-control" id="" required>
                                                            <option value=""></option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Student Contact No.</label>
                                                        <input type="text" class="form-control" name="student_contact"
                                                            onkeypress="return numberOnly(event)" maxlength="11">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label>Region</label>
                                                        <select name="region_text" id="region" class="custom-select"
                                                            required>
                                                        </select>
                                                        <input type="hidden" name="region" id="">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Province</label>
                                                        <select name="province_text" id="province" class="custom-select"
                                                            required>
                                                        </select>
                                                        <input type="hidden" name="province" id="">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Municipality</label>
                                                        <select name="city_text" id="city" class="custom-select"
                                                            required>

                                                            <input type="hidden" name="city" id="">
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Barangay</label>
                                                        <select name="barangay_text" id="barangay" class="custom-select"
                                                            required>
                                                        </select>
                                                        <input type="hidden" name="barangay" id="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-8">
                                                        <label>Father's name</label>
                                                        <input type="text" class="form-control" name="father_name">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Contact No.</label>
                                                        <input type="text" class="form-control" name="father_contact_no"
                                                            onkeypress="return numberOnly(event)" maxlength="11">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-8">
                                                        <label>Mother's name</label>
                                                        <input type="text" class="form-control" name="mother_name">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Contact No.</label>
                                                        <input type="text" class="form-control" name="mother_contact_no"
                                                            onkeypress="return numberOnly(event)" maxlength="11">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-8">
                                                        <label>Guardian's name</label>
                                                        <input type="text" class="form-control" name="guardian_name">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Contact No.</label>
                                                        <input type="text" class="form-control"
                                                            name="guardian_contact_no"
                                                            onkeypress="return numberOnly(event)" maxlength="11">
                                                    </div>

                                                </div>

                                                <div class="form-group text-right mb-0">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            
                                                            <a href="{{ route('auth.login') }}" class="btn btn-outline-secondary float-left btn-block"><i class="fas fa-arrow-circle-left"></i>&nbsp;&nbsp;Back</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="submit" class="btn btn-outline-primary btn-block btnEnroll">
                                                                <i class="fas fa-check"></i>&nbsp;&nbsp; Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--- end -->
                    </div>
                </form>
            </div>
        </section>
    </div>


    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- Toast --}}
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    {{-- Popper --}}
    <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    
    <!-- General JS Scripts -->
    <script src="{{ asset('js/popper.min.js') }}">
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
    <script src="{{ asset('js/global.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/form.js') }}"></script>
</body>

</html>