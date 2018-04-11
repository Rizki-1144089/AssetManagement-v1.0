@extends('layouts.master')

@section('title')
<h2>Tampil Barang</h2>
@endsection
@section('content')
<a href="{{URL::to('Barang/create')}}" type="button" class="btn btn-success"> Tambah Barang</a>

    <table class="table table-striped jambo_table bulk_action">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Jenis Barang</th>
        <th>Lokasi Barang</th>
        <th>Tahun</th>
        <th></th>
    </tr>
    @foreach($barang as $row)
    <tr >
        <td>{{ $row->id_barang }}</td>
        <td>{{ $row->nama_barang }}</td>
        <td>{{ $row->kategori->nama_kategori }}</td>
        <td>{{ $row->lokasi->nama_lokasi }}</td>
        <td>{{ $row->tahun }}</td>
        <td>
            <form action="{{URL::to('Barang/delete')}}/{{$row->id_barang}}" method="post">
            <a href="{{URL::to('Barangdetail')}}/{{$row->id_barang}}" type="button" class="btn btn-xs btn-primary">View</a>
            <a href="{{URL::to('Barang')}}/{{$row->id_barang}}" type="button" class="btn btn-xs btn-info">Edit</a>
                <input type="submit" class="btn btn-xs btn-danger" name="submit" value="Delete">
                {{ csrf_field() }}
                <input type="hidden" name="_method"  value="DELETE">
            </form>
            <!--<button type="button" class="btn btn-xs btn-danger" >Delete</button>-->
        </td>
    </tr>
    @endforeach
    </table>

@endsection