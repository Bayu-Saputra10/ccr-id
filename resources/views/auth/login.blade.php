@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<div class="container-fluid p-0">
    <div class="row g-0 vh-100">
        {{-- kiri --}}
        <div class="col-lg-6 login-left">
            <div class="login-left-content">
                <img src="{{ asset('assets/images/Logo.jpeg') }}" class="login-logo" alt="CCR-ID">
                <h1 class="login-title">{{ t('Build a More Climate-Resilient Business') }}</h1>
                <div class="login-line"></div>
                <p class="login-desc">
                    {{ t('CCR-ID membantu perusahaan mengukur, memahami, dan meningkatkan ketahanan iklim melalui pendekatan berbasis data dan indikator yang komprehensif.') }}
                </p>
                <p class="login-desc">
                    {{ t('Platform ini mengubah informasi terkait tata kelola, strategi, manajemen risiko, adaptasi, dan mitigasi menjadi Climate Resilience Score, Maturity Level, serta rekomendasi strategis yang mendukung pengambilan keputusan dan peningkatan kinerja keberlanjutan perusahaan.') }}
                </p>
                <div class="login-tagline">
                    {{ t('One Platform. One Assessment.') }} <br>
                    {{ t('Stronger Climate Resilience.') }}
                </div>
            </div>
        </div>
        {{-- kanan --}}
        <div class="col-lg-6 login-right">
            <div class="login-form">

                <div class="d-flex justify-content-end pe-1 mb-2">

    <div class="btn-group btn-group-sm shadow-sm" role="group">

        <div class="border bg-light d-flex align-items-center justify-content-center px-2"
     style="width:38px; cursor:default; user-select:none;">

    <i class="bi bi-globe2 fs-5"></i>

</div>

        <a href="{{ route('language.switch','id') }}"
           class="btn btn-sm px-2 {{ app()->getLocale()=='id'
                ? 'btn-success'
                : 'btn-outline-secondary' }}">
            ID
        </a>

        <a href="{{ route('language.switch','en') }}"
           class="btn btn-sm px-2 {{ app()->getLocale()=='en'
                ? 'btn-success'
                : 'btn-outline-secondary' }}">
            EN
        </a>

    </div>

</div>

                <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="CCR-ID" class="login-logo-right">
                    <h2>{{ t('Selamat Datang') }}</h2>
                    <p>{{ t('Silahkan login ke CCR-ID') }}</p>

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">

    <i class="bi bi-exclamation-triangle-fill me-2"></i>

    {{ $errors->first() }}

    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert">
    </button>

</div>

@endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="{{ t('Email') }}" required autofocus>

@error('email')

<div class="invalid-feedback">

    {{ $message }}

</div>

@enderror
                        </div>
                        <div class="mb-4 position-relative">
                            <input
    id="password"
    class="form-control"
    type="password"
    name="password" placeholder="{{ t('Password') }}"
    required>

@error('password')

<div class="invalid-feedback">

    {{ $message }}

</div>

@enderror
                            <span id="togglePassword" class="password-toggle"><i class="bi bi-eye"></i></span>
                        </div>
                        <button class="btn btn-primary login-btn">{{ t('Masuk') }}</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection