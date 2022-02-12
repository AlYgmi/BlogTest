@extends('layouts.main')
@section('container')
    

    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $gambar }}" alt="{{ $name }}" width="200">
@endsection        