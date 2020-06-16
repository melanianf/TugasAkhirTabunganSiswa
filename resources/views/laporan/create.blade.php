@extends('layouts.app')

@section('dashboard')
    Laporan
    <small>Laporan per periode</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Laporan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Laporan per periode</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['url' => route('laporan.store'), 'method' => 'post']) !!}
                    @include('laporan._form')
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col (left) -->
        <!-- /.col (right)-->
    </div>
    <!-- /.row -->
@endsection
