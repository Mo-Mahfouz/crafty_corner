@extends('layouts.collections')

@section('title')
    {{ $sectionName }}
@endsection
@section('section-title')
    {{$sectionName}}
@endsection

@section('product1-image')
    <img src="{{ asset('images/co1.png') }}" alt="Lace Heirloom Gown" class="product-image" />
@endsection
@section('product1-name', )
    {{ $productsFromDb[0]->name }}
@endsection
@section('product1-price')
    ${{ $productsFromDb[0]->price }}
@endsection

@section('product2-image')
    <img src="{{ asset('images/co2.png') }}" alt="Floral Silk Cushion" class="product-image" />
@endsection
@section('product2-name')
    {{ $productsFromDb[1]->name }}
@endsection
@section('product2-price')
    ${{ $productsFromDb[1]->price }}
@endsection

@section('product3-image')
    <img src="{{ asset('images/co3.png') }}" alt="Newborn Welcome Set" class="product-image" />
@endsection
@section('product3-name')
    {{ $productsFromDb[2]->name }}
@endsection
@section('product3-price')
    ${{ $productsFromDb[2]->price }}
@endsection

@section('product4-image')
    <img src="{{ asset('images/co4.png') }}" alt="Velvet Ribbon Bonnet" class="product-image" />
@endsection
@section('product4-name')
    {{ $productsFromDb[3]->name }}
@endsection
@section('product4-price')
    ${{ $productsFromDb[3]->price }}
@endsection

@section('product5-image')
    <img src="{{ asset('images/co5.png') }}" alt="Botanical Wall Hoop" class="product-image" />
@endsection
@section('product5-name')
    {{ $productsFromDb[4]->name }}
@endsection
@section('product5-price')
    ${{ $productsFromDb[4]->price }}
@endsection

@section('product6-image')
    <img src="{{ asset('images/co6.png') }}" alt="Classic Knit Romper" class="product-image" />
@endsection
@section('product6-name')
    {{ $productsFromDb[5]->name }}
@endsection
@section('product6-price')
    ${{ $productsFromDb[5]->price }}
@endsection