@extends('layouts.app')

@section('title', 'Marketplace NFT')

@section('content')

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">NFT Marketplace</a>
    </div>
</nav><div class="container py-5"><div class="text-center mb-5">
    <h1 style="color: #6f42c1; font-weight: bold;">Marketplace NFT</h1>
    <p>Temukan koleksi karya digital yang menarik.</p>
</div>

<div class="row">
    @foreach ($nfts as $nft)
    <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">

            <img src="{{ asset('assets/images/' . $nft->image) }}"
                 class="card-img-top"
                 alt="{{ $nft->title }}"
                 style="height: 220px; object-fit: cover;">

            <div class="card-body">
                <h5 class="card-title">{{ $nft->title }}</h5>

                <p class="text-muted">Kreator: {{ $nft->creator }}</p>

                <p>Koleksi: {{ $nft->collection }}</p>

                <p>{{ $nft->description }}</p>

                <p style="color: #6f42c1; font-weight: bold;">
                    {{ number_format($nft->price_eth, 4) }} ETH
                </p>

                <a href="{{ url('/nft/' . $nft->id) }}"
                   class="btn btn-primary w-100">
                    Lihat NFT
                </a>
            </div>

        </div>
    </div>
    @endforeach
</div>

</div>@endsection