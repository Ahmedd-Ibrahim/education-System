@extends('dashboard.layout.main')
@section('content')
@section('css')
    @include('dashboard.student.css')
@endsection
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Students</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">University</a></li>
                <li class="active">Students</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@push('scripts')
    @include('dashboard.student.cdn')
    {{$dataTable->scripts()}}
@endpush
@endsection
