@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                <i class="bi bi-people-fill text-primary"></i>
                User Management
            </h3>

            <small class="text-muted">
                Kelola seluruh pengguna aplikasi CCR-ID
            </small>
        </div>

        <a href="{{ route('admin.users.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah User

        </a>

    </div>

    <div class="row mb-4">

    <div class="col-md-4">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">

                            Total User

                        </small>

                        <h2 class="mb-0">

                            {{ $totalUser }}

                        </h2>

                    </div>

                    <i class="bi bi-people-fill fs-1 text-primary"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">

                            Admin

                        </small>

                        <h2 class="mb-0 text-danger">

                            {{ $totalAdmin }}

                        </h2>

                    </div>

                    <i class="bi bi-shield-lock-fill fs-1 text-danger"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">

                            User

                        </small>

                        <h2 class="mb-0 text-success">

                            {{ $totalViewer }}

                        </h2>

                    </div>

                    <i class="bi bi-person-fill fs-1 text-success"></i>

                </div>

            </div>

        </div>

    </div>

</div>


    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">

            <form method="GET">

                <div class="row">

                    <div class="col-md-4 ms-auto">

                        <div class="input-group">

                            <input
                                type="text"
                                name="keyword"
                                value="{{ $keyword }}"
                                class="form-control"
                                placeholder="Cari nama atau email">

                            <button class="btn btn-primary">

                                <i class="bi bi-search"></i>

                            </button>

                        </div>

                        <div class="mt-2 text-muted">

    Menampilkan

    <b>{{ $users->count() }}</b>

    dari

    <b>{{ $users->total() }}</b>

    pengguna.

</div>

                    </div>

                </div>

            </form>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                <tr>

                    <th>Nama</th>

                    <th>Email</th>

                    <th width="130">Role</th>

                    <th width="180">Dibuat</th>

                    <th width="180" class="text-center">

                        Action

                    </th>

                </tr>

                </thead>

                <tbody>

                @forelse($users as $user)

                    <tr>
                        <td>

    <div class="d-flex align-items-center">

        <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center me-3"
             style="width:45px;height:45px;font-weight:bold;">

            {{ strtoupper(substr($user->name,0,1)) }}

        </div>

        <div>

            <div class="fw-bold">

                {{ $user->name }}

            </div>

            <small class="text-muted">

                ID : {{ $user->id }}

            </small>

        </div>

    </div>

</td>

                        <td>

                            {{ $user->email }}

                        </td>

                        <td>

                            @if($user->role=='admin')

<span class="badge rounded-pill bg-danger">

    <i class="bi bi-shield-lock-fill"></i>

    Admin

</span>

@else

<span class="badge rounded-pill bg-primary">

    <i class="bi bi-person-fill"></i>

    User

</span>

@endif

                        </td>

                        <td>

                            {{ $user->created_at->format('d M Y') }}

                        </td>

                        <td class="text-center">

                            <a href="{{ route('admin.users.edit',$user) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form
                                action="{{ route('admin.users.destroy',$user) }}"
                                method="POST"
                                class="d-inline form-delete">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6"
                            class="text-center py-5">

                            Tidak ada data.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        <div class="card-footer bg-white">

            {{ $users->links() }}

        </div>

    </div>

</div>

@endsection


@push('scripts')

<script>

document.querySelectorAll('.form-delete').forEach(form=>{

    form.addEventListener('submit',function(e){

        e.preventDefault();

        Swal.fire({

            title:'Hapus user?',

            text:'Data tidak dapat dikembalikan.',

            icon:'warning',

            showCancelButton:true,

            confirmButtonColor:'#d33',

            cancelButtonColor:'#6c757d',

            confirmButtonText:'Ya',

            cancelButtonText:'Batal'

        }).then((result)=>{

            if(result.isConfirmed){

                form.submit();

            }

        });

    });

});

</script>

@endpush