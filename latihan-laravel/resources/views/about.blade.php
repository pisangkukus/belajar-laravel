@extends('layouts.main')

@section('container')
<title>{{ $title }}</title>
    <h1>Halaman About</h1>
    <h2>{{ $name }}</h2>
    <img src="img/{{ $image }}" width="500" alt="">
    @endsection
