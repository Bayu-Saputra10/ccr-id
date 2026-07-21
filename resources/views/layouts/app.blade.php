<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCR-ID</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/android-chrome-512x512.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/android-chrome-192x192.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@stack('scripts')
<body>
    @if (!Request::is('login') && !Request::is('register'))      
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="CCR-ID" class="logo-app">
                <div class="ms-3">
                    <div class="brand-title">
                        CCR-ID
                    </div>
                    <div class="brand-subtitle">
                        Corporate Climate Resilience
                    </div>
                </div>
            </a>
            <div class="ms-auto d-flex align-items-center gap-2">
                @auth

@if(auth()->user()->role == 'admin')

    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-success">
        <i class="bi bi-speedometer2"></i>
        Dashboard Admin
    </a>

    <a href="{{ route('assessments.create') }}" class="btn btn-outline-primary">
        <i class="bi bi-plus-circle"></i>
        Assessment Baru
    </a>

    <a href="{{ route('assessments.index') }}" class="btn btn-outline-primary">
        <i class="bi bi-card-list"></i>
        Semua Assessment
    </a>

@else

    <a href="{{ route('dashboard') }}" class="btn btn-outline-success">
        <i class="bi bi-speedometer2"></i>
        Dashboard
    </a>

@endif


<div class="dropdown">
    <button
        class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false">

        <i class="bi bi-person-circle me-2"></i>
        {{ auth()->user()->name }}

    </button>

    <ul class="dropdown-menu dropdown-menu-end shadow">

        <li>
            <h6 class="dropdown-header">
                {{ auth()->user()->name }}
            </h6>
        </li>

        @if(auth()->user()->role == 'admin')

            <li><hr class="dropdown-divider"></li>

            <li>
                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard Admin
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                    <i class="bi bi-people me-2"></i>
                    User Management
                </a>
            </li>

        @endif

        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-person me-2"></i>
                Profile
            </a>
        </li>

        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button class="dropdown-item text-danger">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </button>
            </form>
        </li>

    </ul>
</div>
</div>

@endauth
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endguest
            </div>
        </div>
    </nav>
    @endif

    @if (Request::routeIs('assessments.index'))
        <div class="container-fluid main-content px-4">
    @else
        <div class="container main-content">
    @endif
    
        @if (session('success'))
            <div class="alert alert-success shadow-sm">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>

    @if (!Request::is('login') && !Request::is('register'))
    <div class="footer">
        CCR-ID© {{ date('Y') }}
    </div>
    @endif

    {{-- alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('validationErrors'))
        <script>
            Swal.fire({
                icon:'warning',
                title:'Assessment belum disimpan',
                html:`<div style="text-align:left">
                    <p>Masih terdapat indikator yang belum lengkap.</p>
                    <ul style="max-height:250px;overflow-y:auto">
                        @foreach (session('validationErrors') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        <br>
                        <b>Silahkan lengkapi seluruh indikator terlebih dahulu.</b>
                    </div>`,
                    width:700,
                    confirmButtonText:'Ok'
            });
        </script>
    @endif

    {{-- pilhan subsektor bedasarkan sektor --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sector = document.getElementById('sector');
            const subsector = document.getElementById('subsector');
            const oldSubsector = "{{ old('subsector',$assessment->subsector ?? '') }}";

            function loadSubsector() {
                if (!sector.value) {
                    subsector.innerHTML = `<option value="" selected disabled>Pilih Subsektor</option>`;
                    return;
                }
                fetch('/subsectors/' + sector.value).then(response => response.json()).then(data => {
                    subsector.innerHTML = `<option value="" disabled ${oldSubsector ? '' : 'selected'}>Pilih Subsektor</option>`;
                    data.forEach(function(item){
                        let selected = item.name === oldSubsector ? 'selected' : '';
                        subsector.innerHTML += `<option value="${item.name}" ${selected}>${item.name}</option>`;
                    });
                });
            }
            sector.addEventListener('change', loadSubsector);
            loadSubsector();
        });
    </script>

</body>
</html>