@extends('layouts.master')

@section('title')
<h2>Create Barang</h2>
@endsection

@section('content')

<div class="panel-body">
    <form action="{{URL::to('Barang/store')}}" method="post">
    <div class="form-group">
        <label>Nama Barang</label>
        <input class="form-control" type="text" name="nama_barang" value="">
      @if($errors->has('name'))
        <p> {{ $errors->first('name') }} </p>
      @endif
    </div>
    <div class="form-group">
      <label>Kategori Barang</label>
          <select class="form-control" name="id_kategori" id="id_kategori">
          <option value="">-- Pilih Kategori --</option>
            @foreach( $kategori as $row )
            
            <option value="{{ $row->id_kategori }}"> {{ $row->nama_kategori }}</option>

            @endforeach
          </select>
    </div>
    <div class="form-group">
      <label>Lokasi Barang</label>
          <select class="form-control" name="id_lokasi" id="id_lokasi">
          <option value="">-- Pilih Lokasi --</option>
            @foreach( $lokasi as $row )
            
            <option value="{{ $row->id_lokasi }}"> {{ $row->nama_lokasi }}</option>

            @endforeach
          </select>
    </div>
    <div class="form-group">
        <label>Tahun Masuk</label>
        <input class="form-control" type="text" name="tahun" value="">
      @if($errors->has('name'))
        <p> {{ $errors->first('name') }} </p>
      @endif
    </div>

        <button type="submit" class="btn btn-info" >Create</button>
        <a href="{{ URL::previous() }}" class="btn btn-danger"> Back </a>
      {{ csrf_field() }}
    </form>
        </div>       
    </div>


@endsection