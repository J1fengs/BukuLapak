@extends('master')

@section('login-content')
<form action="login" method="POST">
  @csrf
  <div class="mb-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="mb-3 form-check">
    <a href="">Create a new account</a>
  </div>
  <div class="mb-3 d-flex justify-content-center">
  <button type="submit" class="btn btn-primary" class="">Login</button>
  </div>
</form>
@endsection