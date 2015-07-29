@extends('layout.master')

@section('content')
	<a href="/pengurus/{{ $tahunValue->id_tahun }}" class="btn btn-danger btn-sm">
		<strong><span class="glyphicon glyphicon-chevron-left"></span> Kembali</strong>
	</a>
	<h2>Tambah Pengurus Angkatan Tahun : {{ $tahunValue->nama_tahun }}</h2>
	<p></p>
	{!! Form::open(array('route'=>['pengurus.detail.store', $tahunValue->nama_tahun], 'class'=>'form-horizontal')) !!}
		<div class="form-group">
        	<label for="text_soal" class="control-label control-label col-xs-3">Tahun : </label>
            <div class="col-xs-9">
            	<select name="id_tahun" required="required" class="form-control">
            		<option value="pilih">--Pilih--</option>
            		@foreach($tahunData as $values)
            			@if($values->nama_tahun == $tahunValue->nama_tahun)
            				<option value="{{ $values->id_tahun }}" selected="true">{{ $values->nama_tahun }}</option>
            			@else
            				<option value="{{ $values->id_tahun }}">{{ $values->nama_tahun }}</option>
            			@endif
					@endforeach
            	</select>
            </div>
        </div>
        <div class="form-group">
        	<label for="text_soal" class="control-label control-label col-xs-3">Jenis Kelamin : </label>
        	<div class="col-xs-9">
                <input type="radio" name="jk" value="Pria" required="required" checked="true" /> Pria
            </div>
            <div class="col-xs-9">
            	<input type="radio" name="jk" value="Wanita" required="required" /> Wanita
            </div>
        </div>
		<div class="form-group">
       		<label for="text_soal" class="control-label control-label col-xs-3">Nama Pengurus : </label>
        	<div class="col-xs-9">
            	<input type="text" name="nama_pengurus" class="form-control" placeholder="isan" required="required" />
            </div>    
        </div>
        <div class="form-group">
        	<label for="text_soal" class="control-label control-label col-xs-3">Email : </label>
        	<div class="col-xs-9">
                <input type="text" name="email" class="form-control" placeholder="isan@gmail.com" required="required" />
            </div>
        </div>
        <div class="form-group">
        	<label for="text_soal" class="control-label control-label col-xs-3">No Telp : </label>
        	<div class="col-xs-9">
                <input type="text" name="no_telp" class="form-control" placeholder="12345" required="required" />
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-12">
            	<center><button type="submit" class="btn btn-info btnSave" id="savePengurus">
            	Tambahkan
            	</button></center>
        	</div>
        </div>       
	{!! Form::close() !!}
    
@endsection