@extends('layouts.master')

@section('title')
	<h2>Detail Barang</h2>
@endsection

@section('content')

	<div class="col-md-8 classified-controls">
		<h3>Detail Barang</h3>
		<ul class="list-group">
			<li class="list-group-item">ID: {{$barang->id_barang}}</li>
			<li class="list-group-item">Nama Barang: {{$barang->nama_barang}}</li>
			<li class="list-group-item">Kategori Barang: {{$barang->kategori->nama_kategori}}</li>
			<li class="list-group-item">Lokasi Barang: {{$barang->lokasi->nama_lokasi}}</li>
			<li class="list-group-item">Tahun: {{$barang->tahun}}</li>
		</ul>
		<a href="{{ URL::previous() }}" class="btn btn-primary"> Kembali </a>
	</div>

@endsection