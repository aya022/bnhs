@extends('../layout/app')
<link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
<style>
    .color-font {
        color: #6666ff;
    }
</style>
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <hr>
        <div class="row mb-2">
            <div class="col-12">
                <h3><i class="fas fa-tasks color-font"></i>&nbsp;&nbsp;Manage Strand and Specialization</h3>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Strand and Specialization</th>
                                            <th>Description</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="strandTable">
                                        <tr>
                                            <td colspan="5" class="text-center">No available data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body m-1">
                            <form id="strandForm">@csrf
                                <input type="hidden" name="id" id="idForStrand">
                                <div class="form-group">
                                    <label>Strand Name</label>
                                    <input type="text" class="form-control" name="strand" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input name="description" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btnSaveStrand">
                                    <i class="fas fa-check"></i>&nbsp;&nbsp;Submit</button>
                                <button type="submit" class="btn btn-outline-secondary cancelStrand">
                                    <i class="fas fa-arrow-circle-left"></i>&nbsp;&nbsp;Cancel</button>
                            </form>
                        </div>
                    </div>
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- section-body -->
    </div>
</section>
@endsection

@section('moreJs')
<script src="{{ asset('administrator/management/strand.js') }}"></script>
<script src="{{ asset('js/select2/select2.full.min.js') }}"></script>
@endsection