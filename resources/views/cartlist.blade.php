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
                        <a href="/removecart/{{ $item->cart_id }}" class="btn"><i class="fas fa-times-circle"
                                style="color: red; transform: scale(2)"></i></a>
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

    <div class="position-absolute payment-card" style="z-index: 10000">
        <div class="card">
            <div class="card-header text-center">
                PEMBAYARAN
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-5 d-flex justify-content-lg-center align-items-center">
                      <i class="fas fa-shopping-cart" style="transform: scale(3); color: #fff"></i>
                    </div>
                    <div class="mb-3">
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                          <i class="far fa-user"></i>
                        </span>
                        <input type="email" class="form-control form-custom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">
                          <i class="far fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                      </div>
                    </div>
                    <div class="mb-3 form-check d-flex justify-content-lg-end">
                      <a href="">Lupa Password?</a>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                      <button type="submit" class="btn btn-light login-button">Login</button>
                    </div>
                  </form>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <style>
        .payment-card {
            top: 40%;
            left: 34%;
        }

        .card-header {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(0, 212, 255, 1) 0%, rgba(0, 172, 209, 1) 43%, rgba(0, 95, 120, 1) 71%, rgba(0, 47, 84, 1) 100%);
            color: #fff;
        }

    </style>
@endsection
