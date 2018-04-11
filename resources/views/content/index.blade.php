@extends('layouts.master')
@section('content')

@section('title')
<h2>Dashboard</h2>
@endsection

Selamat datang {{ Auth::user()->name }}

@endsection