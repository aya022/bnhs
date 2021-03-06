@extends('../layout/app')
<style>
    .color-font {
        color: #6666ff;
    }
    .bac {
        background-color: #ffff;
    }
</style>
@section('content')
<section class="content">
    <div class="container-fluid">
        <hr>
        <div class="row mb-2">
            <div class="col-12">
                <h3><i class="fas fa-user-edit color-font"></i>&nbsp;&nbsp;Enrollment</h3>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <div class="card-outline card-primary shadow-sm bac">
                                    <div class="card-header">
                                        <h4>INFORMATION</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Enrollment Status:
                                            <span class="badge badge-info">{{ $dataArr['status'] }}</span>
                                        </p>
                                        <p>Action taken:
                                            <span class="badge badge-info">{{ $dataArr['action_taken'] }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            @if(Auth::user()->backsubject()->where('back_subjects.remarks','none')->get()->count()!=0)
                            <div class="col-md-6 col-lg-6">
                                <div class="card card-outline card-primary shadow-sm mt-4">
                                    <div class="card-header">
                                        <h4>OTHERS</h4>
                                    </div>
                                    <div class="card-body">

                                        <p>
                                            Back Subject:
                                            <span class="badge badge-danger">
                                                {{ Auth::user()->backsubject()->where('back_subjects.remarks','none')->get()->count() }}
                                            </span><br>
                                            <small>* Note
                                                <em> Must enroll in remedial classes for learning areas with
                                                    failing mark
                                                    and obtain at least 75 or higher</em>
                                            </small>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="col-md-9 col-lg-9">
                                {{-- <div class="card card-outline card-primary shadow-sm mt-4">
                                    <div class="card-header">
                                        <h4>Enrollment</h4>
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">

                                        @if ($dataArr['status']=='Pending')
                                        <button class="btn btn-primary" disabled>
                                            Waiting for Sectioning
                                        </button>
                                        @elseif($dataArr['status']=='Enrolled')
                                        <button class="btn btn-primary" disabled>FINALIZED</button>
                                        @else
                                        <p class="noteTxt"></p>
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-primary btnCheckandVerify">Enroll</button>
                                        @endif
                                    </div>
                                </div> --}}
                                <div class="card card-outline card-primary shadow-sm">
                                    <div class="card-header">
                                        <h5> <i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp;Reminders</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>Learner Promotion and Retention for Grades 7 to 10</h6>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Requirements</th>
                                                    <th>Decision</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Final grade of at least <b>75</b> in all learning areas</td>
                                                    <td><span class="text-success">Promoted</span> to the next grade level</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Did not meet expectations in not more than two learning areas</td>
                                                    <td>Must enroll in remedial classes for learning areas with failing mark and obtain a
                                                        Recomputed Final Grade (RFG) of at least <b>75</b> or higher to be promoted to the
                                                        next
                                                        grade level or semester <br><br>
                                                        If the RFG is below <b>75</b>, the learner must be re-assessed immediately for
                                                        instructional intervention. If the learner still fails in the intervention, he/she
                                                        is allowed to enroll in the next grade level in the succeeding school year with
                                                        continuous provision of tutorial services (DO 13, s. 2018)</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        Did not meet expectations in three or more learning areas
                                                    </td>
                                                    <td>
                                                        more learning areas Retained in the same grade level
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
@endsection
@section('moreJs')
<script src="{{ asset('student/enrollment.js') }}"></script>
@endsection