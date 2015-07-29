@extends('layout.master')

@section('content')
	<a href="/pengurus" class="btn btn-danger btn-sm">
		<strong><span class="glyphicon glyphicon-chevron-left"></span> Kembali</strong>
	</a>
	<h2>Tambah Tahun</h2>
    {!! Form::model(new App\TahunModel, ['route'=> ['pengurus.store']] ) !!}
        @include('pengurus/partials/_form', ['submit_text' => 'Tambah Tahun'])
    {!! Form::close() !!}
@endsection