@extends('layout.master')

@section('content')
	<a href="/pengurus" class="btn btn-danger btn-sm">
		<strong><span class="glyphicon glyphicon-chevron-left"></span> Kembali</strong>
	</a>
	<p></p>
	<h2>Edit Tahun</h2>
    {!! Form::model($tahun, ['method' => 'PATCH', 'route' => ['pengurus.update', $tahun->id_tahun] ] ) !!}
        @include('pengurus/partials/_form', ['submit_text' => 'Edit Tahun'])
    {!! Form::close() !!}
@endsection