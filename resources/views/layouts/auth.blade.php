<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','CCR-ID')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/android-chrome-512x512.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/android-chrome-192x192.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="auth-body">
    @yield('content')
</body>
<script>
        document.addEventListener('DOMContentLoaded', function(){
            const password = document.getElementById('password');
            const toggle = document.getElementById('togglePassword');
            
            toggle.addEventListener('click', function(){
                if (password.type === 'password') {
                    password.type = 'text';
                    this.innerHTML = '<i class="bi bi-eye-slash"></i>';
                }else{
                    password.type = 'password';
                    this.innerHTML = '<i class="bi bi-eye"></i>';
                }
            });
        });
    </script>
</html>