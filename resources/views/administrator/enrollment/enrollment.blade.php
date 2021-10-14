@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.bootstrap4.min.css') }}">
<style>
    .color-font {
        color: #6666ff;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <section class="content-header">
        <hr>
        <div class="row mb-2 justify-content-between">
            <div class="col-sm-6">
                <h3><i class="fas fa-users color-font"></i>&nbsp;&nbsp;Enrollee's List</h3>
            </div>
            <div class="col-sm-6">
                <div class="float-right">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <select class="custom-select mr-sm-2" name="selectedGL">
                                <option value="all">All</option>
                                <option value="7">Grade 7</option>
                                <option value="8">Grade 8</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="card card-outline card-primary">
                <div class="card-body">
    
                    <div class="">
                        {{-- table-responsive--}}
                        <table class="table table-bordered table-hover" id="enrollmentTable">
                            <thead>
                                <tr>
                                    <th>LRN</th>
                                    <th>Student name</th>
                                    <th>Curriculum</th>
                                    <th>Section</th>
                                    <th>Status</th>
                                    <th>Balik Aral</th>
                                    <th>Enrolled Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('moreJs')
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/enrollment/enrollment.js') }}"></script>
@endsection