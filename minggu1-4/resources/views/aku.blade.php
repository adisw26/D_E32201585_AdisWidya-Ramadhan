@extends('app')

@section('content')
	<div class="jumbatron jumbatron-fluid">
		<div class="container">
			<h1 class="display-4">HALAMAN ADIS HOME</h1>
			<p class="lead">THIS IS A HOME PAGE</p>
		</div>
		<p>Nama : {{ $nama }}</p>
		<p>Mata Pelajaran</p>
		<ul>
			@foreach($pelajaran as$p)
			<li>{{ $p }}</li>
			@endforeach
		</ul>
	</div>
@endsection