@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">

            <h4 class="mb-0">

                <i class="bi bi-pencil-square text-warning"></i>

                Edit User

            </h4>

        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.users.update', $user) }}"
                method="POST">

                @csrf
                @method('PUT')

                @include('admin.users._form')

            </form>

        </div>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    function toggle(buttonId, inputId){

        const button = document.getElementById(buttonId);
        const input  = document.getElementById(inputId);

        if(!button || !input) return;

        button.onclick = function(e){

            e.preventDefault();

            const icon = this.querySelector('i');

            if(input.type === 'password'){
                input.type = 'text';
                icon.classList.replace('bi-eye','bi-eye-slash');
            }else{
                input.type = 'password';
                icon.classList.replace('bi-eye-slash','bi-eye');
            }

        };

    }

    toggle('togglePassword','password');
    toggle('toggleConfirmPassword','password_confirmation');

});
</script>

@endsection