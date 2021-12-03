<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg" style="background: #BDDAEB">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BukuPedia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Harga
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Rekomendasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <form class="d-flex" action="/search">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="query">
                    </form>
                </div>
                @if (Session::has('user'))
                <a href="#" class="mx-3">
                    <i class="far fa-heart"></i>
                </a>
                <a href="/cartlist" class="mx-3">
                    <i class="fas fa-shopping-cart">
                        {{$total}}
                    </i>
                </a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Session::get('user')['username']}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>    
                @else
                <a href="#" class="mx-3"><i class="far fa-heart"></i></a>
                <a href="/login" class="mx-3"><i class="fas fa-shopping-cart">0</i></a>
                <li><a href="/login">Login</a></li>
                @endif
                
            </div>
        </div>
    </nav>

<style>
li{
    list-style: none;
}
</style>