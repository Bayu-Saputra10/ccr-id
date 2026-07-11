@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<div class="container-fluid p-0">
    <div class="row g-0 vh-100">

        {{-- kiri --}}
        <div class="col-lg-6 login-left">
            <div class="login-left-content">
                <img src="{{ asset('assets/images/Logo.jpeg') }}" class="login-logo" alt="CCR-ID">
                <h1 class="login-title">
                    CCR-ID
                </h1>
                <div class="login-line"></div>
                <div class="login-desc">
                    Corporate Climate Resilience Assessment Model (CCRAM) adalah aplikasi yang dikembangkan untuk menilai tingkat ketahanan iklim perusahaan secara objektif dan terstruktur. Berdasarkan indikator universal dan sektoral, aplikasi ini mengevaluasi kesiapan perusahaan dalam menghadapi risiko perubahan iklim, menghitung tingkat kematangan ketahanan iklim, serta menyajikan analisis dan rekomendasi strategis guna mendukung peningkatan kinerja keberlanjutan, manajemen risiko dan daya saing perusahaan.
                </div>
            </div>
        </div>

        {{-- kanan --}}
        <div class="col-lg-6 login-right">
            <div class="login-form">
                <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="CCR-ID" class="login-logo-right">
                    <h2>Selamat Datang</h2>
                    <p>Silahkan login ke CCR-ID</p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control login-input" placeholder="Email" required>
                        </div>
                        <div class="mb-4 position-relative">
                            <input type="password" name="password" id="password" class="form-control login-input p3-5" placeholder="Password" required>
                            <span id="togglePassword" class="password-toggle"><i class="bi bi-eye"></i></span>
                        </div>
                        <button class="btn btn-primary login-btn">Masuk</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection