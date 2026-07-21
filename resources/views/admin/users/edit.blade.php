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

@endsection