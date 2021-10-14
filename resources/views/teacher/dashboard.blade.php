@extends('../layout/app')
@section('content')
<style>
  .color-font {
        color: #6666ff;
    }
</style>

<section class="content">
    <div class="container-fluid">
      <hr>
        <div class="row mb-2">
            <div class="col-12">
                <h3><i class="fas fa-desktop color-font"></i>&nbsp;&nbsp;Dashboard</h3>
            </div>
        </div>
      <hr>
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h4 class="display-4">Welcome, {{ Auth::user()->fullname }}!</h4>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
        
        @if ( Auth::user()->chairman()->where('school_year_id', session('sessionAY')->id)->exists())
        <div class="row dashMonitor"></div>
        @endif
    </div>
</section>
@endsection

@section('moreJs')
@if ( Auth::user()->chairman()->where('school_year_id', session('sessionAY')->id)->exists())
<script src="{{ asset('teacher/chairman/dashMonitor.js') }}"></script>
@endif
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
@endsection