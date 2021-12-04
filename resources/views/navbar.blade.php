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
                        <div class="text-center card-box">
                            <div class="member-card pt-2 pb-2">
                                <i class="far fa-user-circle" style="transform: scale(2)"></i>
                                <div class="">
                                    <h4>{{Session::get('user')['username']}}</h4>
                                </div>                            
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>Name</h4>
                                                <p class="mb-0 mx-1 text-muted">{{ Session::get('user')['username'] }}</p>
                                                <h4>Email</h4>
                                                <p class="mb-0 mx-1 text-muted">{{ Session::get('user')['email'] }}</p>
                                                <h4>Phone</h4>                                            
                                                <p class="mb-0 mx-1 text-muted">{{ Session::get('user')['phone'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"><a href="/logout">Logout</a></button>
                            </div>
                            <a href="/critics">Kritik dan Saran</a>
                        </div>
                    </ul>
                </li>    
                @else
                <a href="#" class="mx-3"><i class="far fa-heart"></i></a>
                <a href="/login" class="mx-3"><i class="fas fa-shopping-cart">0</i></a>
                <a href="/login" class="mx-3">Login</a>
                <a href="/signup" class="mx-3">Sign Up</a>
                @endif
                
            </div>
        </div>
    </nav>

<style>
li{
    list-style: none;
}
.card-box {
    padding: 10px;
    border-radius: 3px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.text-pink {
    color: #ff679b!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}
.dropdown-menu[data-bs-popper]{
    left: -98px !important;
}
</style>