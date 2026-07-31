@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="mb-4">{{ t('Dashboard Admin') }}</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>{{ t('Total User') }}</h6>
                    <h2>{{ $totalUser }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>{{ t('Total Admin') }}</h6>
                    <h2>{{ $totalAdmin }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>{{ t('Total Viewer') }}</h6>
                    <h2>{{ $totalViewer }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>{{ t('Assessment') }}</h6>
                    <h2>{{ $assessment }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>{{ t('Draft') }}</h6>
                    <h2>{{ $draft }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>{{ t('Completed') }}</h6>
                    <h2>{{ $completed }}</h2>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
        {{ t('Kelola User') }}
    </a>
</div>
@endsection