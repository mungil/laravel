@extends('layout.master')

@section('content')
	<a href="/pengurus/create" class="btn btn-success btn-sm">
		<strong><span class="glyphicon glyphicon-plus"></span> Tambah tahun</strong>
	</a>
	<p></p>
	<table class="table">
	<?php 
		$kolom=3; 
		$flag=0;
	?>
	@if(!$tahun->count())
		<tr><td>--Data Kosong--</td></tr>
	@else
		@foreach($tahun as $value)
			@if($flag==0)
				<tr>
			@elseif($flag>=$kolom)
				</tr>
				<?php $flag=0; ?>
			@endif
			<td>
				{!! Form::open( array('method'=>'DELETE', 'route'=>array('pengurus.destroy', $value->id_tahun)) ) !!}
					<div class="col-xs-12">
						<a href="{{ route('pengurus.show', $value->id_tahun) }}"><img src="{{ asset('img/pengurus.png') }}" alt="" /></a>
					</div>
					<div class="col-xs-7">
						<center>Tahun : {!! $value->nama_tahun !!}</center>
					</div>
					<div class="col-xs-12">
						{!! link_to_route('pengurus.edit', 'Edit', array($value->id_tahun), array('class'=>'btn btn-info') ) !!} | 
						{!! Form::submit('Delete', array('class'=>'btn btn-danger') ) !!}
					</div>
				{!! Form::close() !!}
			</td>
			<?php $flag++; ?>
		@endforeach
	@endif
	
	</table>
@endsection