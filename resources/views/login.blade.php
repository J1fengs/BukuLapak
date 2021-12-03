@extends('master')

@section('title')
BukuLapak || Login
@endsection

@section('content')
<div style=" background: rgba(62, 87, 178, 1)">
<div class="d-flex justify-content-lg-center align-items-center" style="height: 100vh;;">
<form action="login" method="POST">
  @csrf
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
</div>
<div class="mb-3 d-flex justify-content-center align-items-end">
  <h6>Belum mendaftar? <a href="/signup">Daftar</a></h6>
</div>
</div>
<style>

  .form-custom{

  }
  .login-button{
    width: 200px!important;
    border-radius: 20px;
    color: rgba(62, 87, 178, 1);
    font-weight: bold;
}
</style>
@endsection