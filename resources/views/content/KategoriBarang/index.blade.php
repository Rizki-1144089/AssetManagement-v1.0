@extends('layouts.master')

@section('title')
<h2>Tampil Kategori Barang</h2>
@endsection
@section('content')

    <table class="table table-striped jambo_table bulk_action">
    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
    </tr>
    @foreach($kategori as $row)
    <tr >
        <td>{{ $row->id_kategori }}</td>
        <td>{{ $row->nama_kategori }}</td>
    </tr>
    @endforeach
    </table>

@endsection