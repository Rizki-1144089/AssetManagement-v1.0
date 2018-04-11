@extends('layouts.master')

@section('title')
<h2>Create Barang</h2>
@endsection

@section('content')

<div class="panel-body">
    <form action="{{URL::to('Barang/update')}}/{{$barang->id_barang}}" method="post">
    <div class="form-group">
    <input type="hidden" name="_method" value="PUT">
        <label>Nama Barang</label>
        <input class="form-control" type="text" name="nama_barang" value="{{$barang->nama_barang}}">
      @if($errors->has('name'))
        <p> {{ $errors->first('name') }} </p>
      @endif
    </div>
    <div class="form-group">
    <input type="hidden" name="_method" value="PUT">
      <label>Kategori Barang</label>
          <select class="form-control" name="id_kategori" id="id_kategori">
          <option value="{{$barang->kategori->id_kategori}}">{{$barang->kategori->nama_kategori}}</option>
            @foreach( $kategori as $row )
            
            <option value="{{ $row->id_kategori }}"> {{ $row->nama_kategori }}</option>

            @endforeach
          </select>
    </div>
    <div class="form-group">
    <input type="hidden" name="_method" value="PUT">
      <label>Lokasi Barang</label>
          <select class="form-control" name="id_lokasi" id="id_lokasi">
          <option value="{{$barang->lokasi->id_lokasi}}">{{$barang->lokasi->nama_lokasi}}</option>
            @foreach( $lokasi as $row )
            
            <option value="{{ $row->id_lokasi }}"> {{ $row->nama_lokasi }}</option>

            @endforeach
          </select>
    </div>
    <div class="form-group">
    <input type="hidden" name="_method" value="PUT">
        <label>Tahun Masuk</label>
        <input class="form-control" type="text" name="tahun" value="{{$barang->tahun}}">
      @if($errors->has('name'))
        <p> {{ $errors->first('name') }} </p>
      @endif
    </div>

        <button type="submit" class="btn btn-info" >Update</button>
        <a href="{{ URL::previous() }}" class="btn btn-danger"> Back </a>
      {{ csrf_field() }}
    </form>
        </div>       
    </div>


@endsection