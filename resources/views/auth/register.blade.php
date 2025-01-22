@extends('auth.template.master')

@section('content')

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card">
      <div class="card-header text-center">
        <h1 class="h3 font-weight-bold text-black">Register Kasir</h1>
      </div>
      <div class="card-body">
        <p class="login-box-msg text-black">Buat akun kasir Anda</p>

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Berhasil!',
            text: '{{ session("success") }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });
</script>
@endif


        @if(session('error'))
        <script>
            Swal.fire({
                title: 'Gagal!',
                text: '{{ session("error") }}',
                icon: 'error',
                confirmButtonText: 'Coba Lagi'
            });
        </script>
        @endif

        <form action="{{ route('register.store') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" class="form-control form-control-lg rounded-pill" placeholder="Nama Lengkap" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control form-control-lg rounded-pill" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control form-control-lg rounded-pill" placeholder="Kata Sandi" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control form-control-lg rounded-pill" placeholder="Ulangi Kata Sandi" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                <label for="agreeTerms" class="text-black">
                  Saya setuju dengan <a href="#">syarat dan ketentuan</a>
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-black btn-block btn-lg rounded-pill">Daftar</button>
            </div>
            <div class="text-center mt-3">
    <a href="{{ route('login') }}" class="btn btn-outline-dark btn-block" style="border-radius: 10px; font-weight: bold;">
        Login Sekarang
    </a>
</div>

          </div>
        </form>
        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-lg btn-black rounded-pill">
            <i class="fab fa-facebook mr-2"></i>
            Daftar dengan Facebook
          </a>
          <a href="#" class="btn btn-block btn-lg btn-black rounded-pill">
            <i class="fab fa-google-plus mr-2"></i>
            Daftar dengan Google
          </a>
        </div>
        <a href="{{ route('login') }}" class="text-center text-black">Sudah punya akun?</a>
      </div>
    </div>
  </div>
</body>




@endsection
