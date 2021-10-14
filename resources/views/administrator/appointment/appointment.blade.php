@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fullcalendar/fullcalendar.min.css') }}">
<!-- fullCalendar -->
{{-- <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css') }}"> --}}
@endsection
@section('content')
@include('administrator/appointment/partial/holidayForm')
@include('administrator/appointment/partial/viewAppointed')
<style>
    .full {
        color: red;
        border: 1px solid red;
        background: black;
    }
    .color-font {
          color: #6666ff;
      }
</style>

<section class="content-header">
    <div class="container-fluid">
        <hr>
        <div class="row mb-2 justify-content-between">
            <div class="col-lg-5 col-md-8">
                <h3><i class="fas fa-file-signature color-font"></i>&nbsp;&nbsp;Appointment List</h3>
            </div>
            <div class="col-lg-2 col-md-2">
                <button class="btn float-right btn-outline-info" id="btnModalHoliday">
                    <i class="fas fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;Add Holiday
                </button>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card card-outline card-primary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="fc-overflow">
                                        <div id="myEvent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="tableHoliday">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
@endsection

@section('moreJs')
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('administrator/appointment/appointment.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endsection