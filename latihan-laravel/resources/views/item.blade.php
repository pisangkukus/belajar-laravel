
@extends('layouts.main')

@section('container')
    <h1>Halaman  Item</h1>
    <p>Category : <a href="/category/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a></p>
    <p>Store : <a href="/stores/{{ $item->store->username }}" class="text-decoration-none">{{ $item->store->name }}</a></p>
    <h2>{{ $item->namaBarang }}</h2>
    <h2>{{ $item->harga }}</h2>
    {!! $item->description !!}
@endsection