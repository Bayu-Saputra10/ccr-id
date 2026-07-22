@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">

            <h4 class="mb-0">

                <i class="bi bi-person-plus-fill text-primary"></i>

                Tambah User

            </h4>

        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.users.store') }}"
                method="POST">

                @include('admin.users._form')

            </form>

        </div>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    function togglePassword(inputId, buttonId) {

        const input = document.getElementById(inputId);
        const icon = document.querySelector('#' + buttonId + ' i');

        if (!input || !icon) return;

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('bi-eye', 'bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.replace('bi-eye-slash', 'bi-eye');
        }
    }

    document.getElementById('togglePassword')?.addEventListener('click', function () {
        togglePassword('password', 'togglePassword');
    });

    document.getElementById('toggleConfirmPassword')?.addEventListener('click', function () {
        togglePassword('password_confirmation', 'toggleConfirmPassword');
    });

});
</script>
@endsection