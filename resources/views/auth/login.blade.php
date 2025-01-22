@extends('auth.template.master')

@section('content')

<style>
    /* Minimalist black and white Apple-inspired design */
    .login-box {
        max-width: 360px;
        margin: auto;
    }

    .card {
        border: none;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        background-color: #fff;
    }

    .card-header {
        text-align: center;
        font-size: 1.8rem;
        font-weight: bold;
        color: #000;
        border-bottom: none;
        padding: 20px 0;
    }

    .form-control {
        border-radius: 10px;
        height: 50px;
        border: 1px solid #ccc;
        box-shadow: none;
    }

    .btn-black {
        background-color: #000;
        color: #fff;
        border-radius: 10px;
        height: 50px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .btn-black:hover {
        background-color: #333;
    }

    .text-black {
        color: #000;
    }

    .text-center a {
        font-size: 0.9rem;
        color: #000;
    }

    .text-center a:hover {
        color: #555;
        text-decoration: underline;
    }

    .divider {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 20px 0;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #ddd;
    }

    .divider:not(:empty)::before {
        margin-right: 0.5em;
    }

    .divider:not(:empty)::after {
        margin-left: 0.5em;
    }
</style>

<body class="hold-transition login-page">
<div class="login-box">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

       
    <div class="card">
        <div class="card-header">
            Login Kasir
        </div>

        <form action="{{ route('') }}" method="post">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-black">Login</button>
            </div>
        </form>

        <!-- Forgot Password -->
        <div class="text-center mt-3">
            <a href="forgot-password.html">Lupa password?</a>
        </div>

        <!-- Divider -->
        <div class="divider">atau</div>

        <!-- Register Button -->
        <div class="text-center">
            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-block" style="border-radius: 10px; font-weight: bold;">
                Buat Akun Baru
            </a>
        </div>
    </div>
</div>
</body>

@endsection
