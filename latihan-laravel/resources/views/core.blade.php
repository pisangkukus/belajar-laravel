@extends('layouts.main')

@section('container')
<div class="container">
        <h1 class="mb-5">Halaman Core</h1>
        @foreach ($items as $item)
            <article class="container mb-5 border-bottom">
                <h2 ><a  href="/core/{{ $item->slug}}">{{ $item->namaBarang }}</a></h2>
                <p>Category : <a class="text-decoration-none" href="/category/{{ $item->category->slug }}">{{ $item->category->name }}</a></p>
                <p>Store : <a href="/stores/{{ $item->store->username }}" class="text-decoration-none">{{ $item->store->name }}</a></p>
                <h2>{{ $item->harga }}</h2>
                <h4>{{ $item->excerpt }}</h4>
            </article>
        @endforeach
    </div>
@endsection

