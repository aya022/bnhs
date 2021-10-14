@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
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
        <div class="row mb-2">
            <div class="col-12">
                <h3><i class="fas fa-book-reader color-font"></i>&nbsp;&nbsp;Manage Subject</h3>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-body">
                            <div class="float-right">
                                <div class="form-row align-items-center mt-3 ml-4 pb-0">
                                    <div class="col-auto my-1">
                                        <div class="mr-sm-2">
                                            <label for="" class="font-weight-bold">Grade Level</label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <select class="custom-select mr-sm-2" id="selectedGL">
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
    
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Code</th>
                                            <th>Descriptive Title</th>
                                            <th>Type</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="subjectTable">
                                        <tr>
                                            <td colspan="6" class="text-center">No available data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- col-lg-8 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-outline card-info">
                        <div class="card-body m-1">
                            <form id="subjectForm">@csrf
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label>Grade Level</label>
                                    <select name="grade_level" class="form-control" required>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Subject Code</label>
                                    <input type="text" class="form-control" name="subject_code" required>
                                </div>
                                <div class="form-group">
                                    <label>Descriptive Title</label>
                                    <input type="text" class="form-control" name="descriptive_title" required>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="subject_for" class="form-control" required>
                                        <option value="GENERAL">General</option>
                                        <option value="STEM">STEM - Science Technology Engineering and Mathematics</option>
                                        <option value="BEC">BEC - Basic Education Curriculum</option>
                                        <option value="SPA">SPA - Special Program Art</option>
                                        <option value="SPJ">SPJ - Special Program Journalism</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btnSaveSubject">Submit</button>
                                <button type="submit" class="btn btn-outline-warning cancelSubject">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- section-body -->
    </section>
</div>
@endsection

@section('moreJs')
<script src="{{ asset('js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('administrator/management/subject.js') }}"></script>
@endsection