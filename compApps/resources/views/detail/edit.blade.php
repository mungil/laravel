@extends('layout.master')

@section('content')
	{!! link_to_route('pengurus.show', 'Kembali', array($tahun->id_tahun), array('class'=>'btn btn-danger btn-sm') ) !!} 
	<p></p>
	<h2>Edit Data Pengurus : {{ $pengurus->nama_pengurus }}</h2>
	<p></p>
	{!! Form::open(array('method' => 'PATCH', 'route'=>['pengurus.detail.update', $tahun->id_tahun, $pengurus->id_pengurus], 'class'=>'form-horizontal')) !!}
		<div class="form-group">
        	<label for="text_soal" class="control-label control-label col-xs-3">Tahun : </label>
            <div class="col-xs-9">
            	<select name="id_tahun" required="required" class="form-control">
            		<option value="pilih">--Pilih--</option>
            		@foreach($dataTahun as $values)
            			@if($values->id_tahun == $pengurus->id_tahun)
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
        	@if($pengurus->jk=='Pria')
	        	<div class="col-xs-9">
	                <input type="radio" name="jk" value="Pria" required="required" checked="true" /> Pria <br/>
	                <input type="radio" name="jk" value="Wanita" required="required" /> Wanita
	            </div>
	        @else
	        	<div class="col-xs-9">
	                <input type="radio" name="jk" value="Pria" required="required" /> Pria <br/>
	                <input type="radio" name="jk" value="Wanita" required="required" checked="true" /> Wanita
	            </div>
	        @endif
        </div>
        <div class="form-group">
       		<label for="text_soal" class="control-label control-label col-xs-3">Nama Pengurus : </label>
        	<div class="col-xs-9">
            	<input type="text" name="nama_pengurus" class="form-control" placeholder="isan" value="{{ $pengurus->nama_pengurus }}" required="required" />
            </div>    
        </div>
        <div class="form-group">
        	<label for="text_soal" class="control-label control-label col-xs-3">Email : </label>
        	<div class="col-xs-9">
                <input type="text" name="email" class="form-control" placeholder="isan@gmail.com" value="{{ $pengurus->email }}" required="required" />
            </div>
        </div>
        <div class="form-group">
        	<label for="text_soal" class="control-label control-label col-xs-3">No Telp : </label>
        	<div class="col-xs-9">
                <input type="text" name="no_telp" class="form-control" placeholder="12345" value="{{ $pengurus->no_telp }}" required="required" />
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-12">
            	<center><button type="submit" class="btn btn-info btnSave" id="savePengurus">
            	Simpan Perubahan
            	</button></center>
        	</div>
        </div>     
	{!! Form::close() !!}
@endsection