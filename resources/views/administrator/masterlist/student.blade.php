@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/responsive.bootstrap4.min.css') }}">
<style>
    .color-font {
        color: #6666ff;
    }
</style>
@endsection

@section('content')
<!-- Modal -->
@include('administrator/masterlist/partial/modal')
{{-- Modal end --}}

<div class="container-fluid">
    <section class="content-header">
        <hr>
        <div class="row mb-2 justify-content-between">
            <div class="col-md-6 col-12">
                <h3><i class="fas fa-id-badge color-font"></i>&nbsp;&nbsp;Student Masterlist</h3>
            </div>
            <div class="col-md-6 col-12">
                <button class="btn float-right btn-outline-primary" id="btnStudentModal">
                    <i class="fas fa-user-plus"></i>&nbsp;&nbsp;Add Student
                </button>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="col-12">
                <div class="card">
    
                    <div class="card-body mt-2">
                        {{-- <div class="table-responsive"> --}}
                        {{-- dt-responsive nowrap --}}
                        <table class="table table-striped" id="studentTable">
                            <thead>
                                <tr>
                                    <th>LRN</th>
                                    <th>Fullname</th>
                                    <th>Gender</th>
                                    <th>Contact No.</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@section('moreJs')
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/datatable/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/masterlist/student.js') }}"></script>
<script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
@endsection