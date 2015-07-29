@extends('layout.master')

@section('content')
	<a href="/pengurus" class="btn btn-danger btn-sm">
		<strong><span class="glyphicon glyphicon-chevron-left"></span> Kembali</strong> 
	</a> 
	{!! link_to_route('pengurus.detail.create', 'Tambah Baru', array($tahun->id_tahun), array('class'=>'btn btn-success btn-sm') ) !!} 
	<p></p>
	<h2>Pengurus tahun : {{ $tahun->nama_tahun }}</h2>
	<p></p>
	<table class="table">
		<?php 
			$kolom=3; 
			$flag=0;
		?>
		@if(!$tahun->pengurus()->count())
			<tr><td>--Data Pengurus Kosong--</td></tr>
		@else
			@foreach($tahun->pengurus() as $value)
				@if($flag==0)
					<tr>
				@elseif($flag>=$kolom)
					</tr>
					<?php $flag=0; ?>
				@endif
				<td>
					
					<div class="col-xs-12">
						@if($value->jk=='Pria')
							<img src="{{ asset('img/male.png') }}" alt="" />
						@else
							<img src="{{ asset('img/female.png') }}" alt="" />
						@endif
					</div>
					<div class="col-xs-12">
						Nama : {{ $value->nama_pengurus }}
					</div>
					<div class="col-xs-12">
						{!! link_to_route('pengurus.detail.edit', 'Edit', array($tahun->id_tahun, $value->id_pengurus), array('class'=>'btn btn-info') ) !!}
						<!-- {!! Form::submit('Delete', array('class'=>'btn btn-danger') ) !!} -->
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confDelete" data-whatever="@del">
							Delete
						</button>
						<div class="modal fade" id="confDelete" tabindex="-1" role="dialog" aria-labelledby="confDeleteLabel">
							{!! Form::open(array('class'=>'form-inline', 'method'=>'DELETE', 'route'=>array('pengurus.detail.destroy', $tahun->id_tahun, $value->id_pengurus))) !!}
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										Apakah anda yakin ingin menghapus data pengurus "{{ $value->nama_pengurus }}" ?
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
										<button type="submit" class="btn btn-danger">Yes</button>
									</div>
								</div>
							</div>
							{!! Form::close() !!}
						</div>
					</div>
					
				</td>
				<?php $flag++; ?>
				<!-- {{ $value->nama_pengurus }}<br/> -->
			@endforeach
			<!-- {{ $tahun->pengurus()->count() }} -->
		@endif
	</table>
@endsection