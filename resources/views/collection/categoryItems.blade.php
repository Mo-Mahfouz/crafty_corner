@extends('layouts.collections')

@section('title', $sectionName)

@section('section-title', $sectionName)

@section('content')
    @foreach($productsFromDb as $product)
        <div class="product-card">
            <div class="product-img">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image" />
            </div>
            <div class="product-info">
                <h3 class="product-name">{{ $product->name }}</h3>
                <div class="price"> {{ $product->price }}</div>


            </div>
        </div>
    @endforeach
@endsection