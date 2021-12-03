@extends('master')

@section('title')
BukuLapak || Cart
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center">
                <div class="trending-wrapper">
                    @php $total=0 @endphp
                    <div class=" row searched-item cart-list-devider">
                        <div class="col d-flex align-items-center">
                            <h3>Foto Buku</h3>
                        </div>
                        <div class="col d-flex align-items-center">
                            <h3>Judul Buku</h3>
                        </div>
                        <div class="col d-flex align-items-center">
                            <h3>Harga</h3>
                        </div>
                        <div class="col d-flex align-items-center">
                            <h3>Hapus</h3>
                        </div>
                    </div>
                    @foreach ($products as $item)
                        <div class=" row searched-item cart-list-devider">
                            <div class="col d-flex align-items-center">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending-image" src="{{ $item->gallery }}">
                                </a>
                            </div>
                            <div class="col d-flex align-items-center">
                                <div class="">
                                    <h6>{{ $item->title }}</h6>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center">
                                <h4>Rp. {{ $item->price }}</h4>
                            </div>
                            <div class="col d-flex align-items-center">
                                <a href="/removecart/{{ $item->cart_id }}" class="btn"><i
                                        class="fas fa-times-circle" style="color: red; transform: scale(2)"></i></a>
                            </div>
                        </div>
                        @php $total += $item->price @endphp
                    @endforeach
                    <h4>Total Pembayaran</h4>
                    <h2>Rp. {{ $total }}</h2>
                    <div class="d-flex justify-content-center flex-column">
                        <a class="btn" href="ordernow"
                            style="background:rgba(2, 62, 138, 1); border-radius: 40px; font-weight: bold; color: white!important; letter-spacing: 5px; font-size: 30px">Bayar</a>
                    </div>
                </div>
    </div>
@endsection
