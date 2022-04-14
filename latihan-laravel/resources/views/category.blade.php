@extends('layouts.main')

@section('container')
    <h1>Item Category :{{ $name }}</h1>
    @foreach ($items as $item)
        <h2><a href="/core/{{ $item->slug}}">{{ $item->namaBarang }}</a></h2>
        <h2>{{ $item->harga }}</h2>
        <h4>{{ $item->excerpt }}</h4>
    @endforeach
@endsection

