<div class="form-group">
	{!! Form::label('nama', 'Nama Tahun : ') !!}
	{!! Form::text('nama_tahun', null, array('class'=>'form-control', 'required'=>'true')) !!}
</div>
<div class="form-group">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary'] ) !!}
</div>