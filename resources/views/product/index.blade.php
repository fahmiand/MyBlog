@extends('layouts.main')

@section('container')

<section class="products" id="products">
    <h1 class="heading"> our <span>products</span> </h1>
    <div class="container-md">
        <div class="row row-cols-3">
            @foreach ($items as $item)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/'. $item->image) }}" class="card-img-top" alt="{{ $item->image }}">
                        <div class="card-body">
                            <a href="/products/{{ $item->name }}" class="text-decoration-none"><h2 class="card-title">{{ $item->name }}</h2></a>
                            <h4>jumlah = {{ $item->jumlah }}</h4>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Keranjang</a>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection