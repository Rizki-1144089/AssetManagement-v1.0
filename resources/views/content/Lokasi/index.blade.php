@extends('layouts.master')

@section('title')
<h2>Tampil Lokasi</h2>
@endsection
@section('content')

    <table class="table table-striped jambo_table bulk_action">
    <tr>
        <th>ID</th>
        <th>Lokasi</th>
    </tr>
    @foreach($lokasi as $row)
    <tr >
        <td>{{ $row->id_lokasi }}</td>
        <td>{{ $row->nama_lokasi }}</td>
    </tr>
    @endforeach
    </table>

@endsection