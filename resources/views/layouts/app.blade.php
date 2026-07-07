<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCRAM Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body{
            background: #f4f6f9;
            font-family: 'Segoe UI',sans-serif;
        }
        .navbar{
            box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
        }
        .main-content{
            margin-top: 40px;
            margin-bottom: 50px;
            min-height: calc(100vh - 170px);
        }
        .content-card{
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .08);
        }
        .footer{
            margin-top: 40px;
            text-align: center;
            color: #777;
            font-size: 14px;
            padding: 15px;
        }
        .btn{
            border-radius: 8px;
        }
        .table{
            vertical-align: middle;
        }
        .card{
            border: none;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .08);
        }
        h2,h3,h4,h5{
            font-weight: 600;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">CCRAM Assessment</a>
        <div class="d-flex gap-2">
            <a href="{{ route('assessments.create') }}" class="btn btn-outline-secondary">Assessment Baru</a>
            <a href="{{ route('assessments.index') }}" class="btn btn-outline-secondary">Daftar Assessment</a>
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
        CCRAM Assessment System {{ date('Y') }}
    </div>

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

</body>
</html>