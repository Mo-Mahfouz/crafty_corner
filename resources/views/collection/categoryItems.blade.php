@extends('layouts.collections')

@section('title', $sectionName)

@section('section-title', $sectionName)

@section('content')
    @foreach($productsFromDb as $product)
        <div class="product-card">
            <div class="product-img">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
            </div>
            <div class="product-info">
                <h3 class="product-name">{{ $product->name }}</h3>
                <div class="price"> {{ $product->price }}</div>
                <a href="{{ route($detailsRoute, $product->id) }}" class="details-link">More Details</a>
            </div>
        </div>
    @endforeach
@endsection