@extends('layouts.app')

@section('dashboard')
  Laporan
   <small>Export Laporan</small>
@endsection

@section('breadcrumb')
   <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="{{ url('/admin/books') }}">Laporan</a></li>
   <li class="active">Export</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Form Export Laporan</h3>
              </div>
                <!-- /.box-header -->
				@role('admin')
                {!! Form::open(['url' => route('export.tabungan.post'), 'method' => 'post']) !!}
                    <div class="box-body">
                        <div class="form-group has-feedback{!! $errors->has('author_id') ? 'has-error' : '' !!}">
                            {!! Form::label('id_siswa', 'Nama Siswa') !!}
                            {!! Form::select('id_siswa[]', App\siswa::pluck('nama_lengkap', 'nis')->all(), null, [
                                'class' => 'form-control js-select2',
                                'multiple' => 'multiple',
                                
                            ]) !!}
                            {!! $errors->first('id_siswa', '<p class="help-block">:message</p>') !!}
                        </div>
						
                        <div class="form-group row">
                            <div class="col-sm-10">*Kosongkan form untuk mengunduh semua data tabungan</div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {!! Form::submit('Unduh', ['class' => 'btn btn-primary']) !!}
                        <button type="button" class = "btn btn-batal" onclick="window.location='{{ route('tabungan.index') }}'">Batal</button>
                    </div>
                {!! Form::close() !!}
				@endrole
				
				@role('walikelas')
                {!! Form::open(['url' => route('export.tabungansiswa.post'), 'method' => 'post']) !!}
                    <div class="box-body">
                        <div class="form-group has-feedback{!! $errors->has('author_id') ? 'has-error' : '' !!}">
                            {!! Form::label('id_siswa', 'Nama Siswa') !!}
                            {!! Form::select('id_siswa[]', $data_siswa->pluck('nama_lengkap', 'nis')->all(), null, [
                                'class' => 'form-control js-select2',
                                'multiple' => 'multiple',
                                
                            ]) !!}
							
                            {!! $errors->first('id_siswa', '<p class="help-block">:message</p>') !!}
                        </div>
						
                        <div class="form-group row">
                            <div class="col-sm-10">*Kosongkan form untuk mengunduh semua data tabungan</div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {!! Form::submit('Unduh', ['class' => 'btn btn-primary']) !!}
                        <button type="button" class = "btn btn-batal" onclick="window.location='{{ route('tabungansiswa.index') }}'">Batal</button>
                    </div>
                {!! Form::close() !!}
				@endrole
				
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
