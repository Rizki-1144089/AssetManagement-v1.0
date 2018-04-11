@extends('layouts.master')

@section('title')
<h2>Tampil Semua User</h2>
@endsection
@section('content')
<a href="{{URL::to('user/create')}}" type="button" class="btn btn-success"> Tambah User</a>

    <table class="table table-striped jambo_table bulk_action">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th></th>
    </tr>
    @foreach($user as $row)
    <tr >
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->username }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->roles->role_name }}</td>
        <td>
            <form action="{{URL::to('user/delete')}}/{{$row->id}}" method="post">
            <a href="{{URL::to('userdetail')}}/{{$row->id}}" type="button" class="btn btn-xs btn-primary">View</a>
            <a href="{{URL::to('user')}}/{{$row->id}}" type="button" class="btn btn-xs btn-info">Edit</a>
                <input type="submit" class="btn btn-xs btn-danger" name="submit" value="Delete">
                {{ csrf_field() }}
                <input type="hidden" name="_method"  value="DELETE">
            </form>
        </td>
    </tr>
    @endforeach
    </table>

@endsection