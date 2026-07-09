<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCR-ID</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/android-chrome-512x512.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body{
            background: #f4f6f9;
            font-family: 'Segoe UI',sans-serif;
        }
        .navbar{
            background: #fff;
            padding: 12px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .06)
        }
        .navbar-brand{
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        .logo-app{
            width: 55px;
            height: 55px;
            object-fit: contain;
        }
        .brand-title{
            font-size: 22px;
            font-weight: 700;
            color: #212529;
            line-height: 1.1;
        }
        .brand-subtitle{
            font-size: 13px;
            color: #6c757d;
            margin-top: 2px;
        }
        .navbar .btn{
            padding: 8px 18px;
            border-radius: 8px;
        }
        .main-content{
            padding-top: 20px;
            padding-bottom: 20px;
            min-height: calc(100vh - 180px);
        }
        .content-card{
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .08);
        }
        .footer{
            margin-top: 20px;
            text-align: center;
            color: #6c757d;
            font-size: .9rem;
            padding: 18px 0;
            border-top: 1px solid #e9ecef;
        }
        .btn{
            border-radius: 8px;
        }
        .table{
            vertical-align: middle;
        }
        .card{
            border: none;
            border-radius: 14px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .08);
        }
        .card-header{
            padding: .8rem 1.2rem;
        }
        .card-body{
            padding: 1.2rem;
        }
        .form-label{
            font-size: .92rem;
            font-weight: 600;
            margin-bottom: .35rem;
        }
        .form-control, .form-select{
            min-height: 42px;
            border-radius: 8px;
        }
        textarea .form-control{
            min-height: 85px;
        }
        .form-check{
            margin-bottom: .35rem;
        }
        .border{
            border-color: #e5e7eb!important;
        }
        h2,h3,h4,h5{
            font-weight: 600;
        }

        @media(max-width:768px){
            .navbar{
                padding: 10px 0;
            }
            .main-content{
                padding-top: 15px;
                padding-bottom: 15px;
            }
            .footer{
                margin-top: 15px;
                padding: 15px 0;
            }
        }
    </style>

</head>
<body>
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
            <div class="ms-auto">
                <a href="{{ route('assessments.create') }}" class="btn btn-outline-primary me-2">Assessment Baru</a>
                <a href="{{ route('assessments.index') }}" class="btn btn-outline-primary">List Assessment</a>
            </div>
        </div>
    </nav>

    <div class="container main-content">
        @if (session('success'))
            <div class="alert alert-success shadow-sm">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>

    <div class="footer">
        CCR-ID© {{ date('Y') }}
    </div>

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
                        @foreach (session('validationErrors') as $Error)
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
            const oldSubsector = "{{ old('subsector') }}";

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