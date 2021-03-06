@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.bootstrap4.min.css') }}">
<style>
    .failGrade {
        color: red;
    }

    .noborder {
        width: 95%;
        border: none;
        border-color: transparent;
        background: transparent;
        outline: none;
    }
    .color-font {
        color: #6666ff;
    }
</style>
@endsection

@section('content')
<div class="modal fade" id="fillGradeInPrevious" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="fillGradeInPreviousLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p class="mt-3">Please fill previous grading period</p>
                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <hr>
        <div class="row mb-2 justify-content-between">
            <div class="col-lg-5 col-md-8">
                <h3><i class="fas fa-book-open color-font"></i>&nbsp;&nbsp;Grading</h3>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="float-right ">
                    <form class="form-inline ">
                        <label class="my-1 mr-2" for="filterLabel">Sections</label>
                        <select name="filterMyLoadSection" class="custom-select my-1 mr-sm-2" id="filterLabel">
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="card card-outline card-primary">
                <div class="card-body pb-1">
                    <div class="">
                        <div class="float-left">
                            <span style="font-size: 15px" class="txtSubjectName badge badge-warning pt-1 pb-1 mt-2"></span>
                        </div>
                        <table class="table table-bordered table-hover" id="myClassTable" style="font-size: 14px">
                            <thead>
                                <tr>
                                    <th>Student name</th>
                                    <th class="text-center" width="7%">1st</th>
                                    <th class="text-center" width="7%">2nd</th>
                                    <th class="text-center" width="7%">3rd</th>
                                    <th class="text-center" width="7%">4th</th>
                                    <th class="text-center" width="7%">Avg</th>
                                    <th class="text-center" width="8%">Remarks</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tbody id="gradingTable">
                                <tr>
                                    <td colspan="7" class="text-center">No data available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('moreJs')
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('teacher/grading.js') }}"></script>
@endsection