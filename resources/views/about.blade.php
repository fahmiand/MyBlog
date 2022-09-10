@extends('layouts.main')

@section('container')    
<h1>selamat datang di halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $imag }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection
