@extends('layouts.app')

@section('title', 'Detail NFT')

@section('content')

<div class="container py-5"><div class="card p-4 mx-auto" style="max-width: 600px;">

    <h2 class="text-center mb-4" style="color: #6f42c1; font-weight: bold;">
        Detail NFT
    </h2>

    <img src="{{ asset('assets/images/' . $nft->image) }}"
         class="img-fluid rounded mb-4"
         style="width: 100%; height: 300px; object-fit: cover;"
         alt="{{ $nft->title }}">

    <h3>{{ $nft->title }}</h3>

    <p>Kreator: {{ $nft->creator }}</p>

    <p>Koleksi: {{ $nft->collection }}</p>

    <p>{{ $nft->description }}</p>

    <p style="color: #6f42c1; font-weight: bold; font-size: 22px;">
        {{ number_format($nft->price_eth, 4) }} ETH
    </p>

    <a href="{{ url('/') }}" class="btn btn-primary">
        Kembali ke Marketplace
    </a>

</div>

</div>@endsection