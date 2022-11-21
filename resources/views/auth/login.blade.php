@extends('layouts.auth')

@section('login')

<section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card">
            <form class="theme-form login-form" action="{{ route('login') }}">
              @csrf
              <h4>Login</h4>
              <h6>Selamat Datang! Masukkan Akun Anda</h6>
              <div class="form-group">
                <label>Email</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input name="email" class="form-control" type="email" required="" placeholder="Test@gmail.com">
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" name="password" type="password" required="" placeholder="*********">
                  <div class="show-hide"><span class="show">                         </span></div>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <input id="checkbox1" type="checkbox">
                  <label class="text-muted" for="checkbox1">Remember password</label>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection