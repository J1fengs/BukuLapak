@extends('master')

@section('title')
BukuLapak || Detail dan Produk
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{ $products['gallery'] }}" class="img-responsivealt="" class="detail-img">
        </div>
        <div class="col-sm-6">
            <a href="/">BACK</a>
            <h2>{{ $products['title'] }}</h2>
            <h3>Price : Rp. {{ $products['price'] }}</h3>
            <h3>Year : {{ $products['year'] }}</h3>
            <h3>Id : {{ $products['id'] }}</h3>
        </div>  
    </div>
</div>
@endsection