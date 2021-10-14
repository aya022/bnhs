@extends('../layout/app')
<style>
    .color-font {
          color: #6666ff;
      }
      .size-font {
          font-size: 18px;
      }
</style>
@section('content')

<section class="content">
    <div class="container-fluid">
        <hr>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-desktop color-font"></i>&nbsp;&nbsp;Dashboard</h3>
            </div>
        </div>
        <hr>

        <div class="section-body">
            <div class="col-12 mb-4">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container-fluid">
                      <h3 class="display-4">Welcome, {{ Auth::user()->fullname }}!</h3>
                      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                      <div class="row">
                            <div class="col-lg-2">
                                <p class="size-font"><b>Enrollment Status:</b>
                                    @if (empty($enrolledData->enroll_status))
                                    <span class="badge badge-warning">Ongoing</span>
                                    @else
                                    <span class="badge badge-info">{{ $enrolledData->enroll_status }}</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-lg-2">
                                <p class="size-font"> <b>Section:</b>
                                    @if (empty($enrolledData->section_name))
                                    <span class="badge badge-warning">N/A</span>
                                    @else
                                    <span class="badge badge-success"> {{ $enrolledData->section_name }}</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Header (Page header) -->
                <hr>
                <div class="row mb-2">
                    <div class="col-12">
                        <h3><i class="fas fa-thumbtack color-font"></i>&nbsp;&nbsp;Announcement</h3>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="row mb-2">
                    <div class="col-12">
                        <h3><i class="fas fa-newspaper color-font"></i>&nbsp;&nbsp;News Blogs</h3>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
@endsection