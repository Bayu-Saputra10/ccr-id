@extends('layouts.app')
@section('content')
@php
    $sectorNames =[
        'infrastructure'=> t('Infrastruktur'),
        'manufacturing'=> t('Manufaktur'),
        'agriculture'=> t('Agrikultur'),
        'finance'=> t('Keuangan'),
        'mining'=> t('Energi & Pertambangan'),
    ];
    $sectorColors = [
        'infrastructure' => '#4F46E5',
        'manufacturing' => '#F59E0B',
        'agriculture' => '#06B6D4',
        'finance' => '#10B981',
        'mining' => '#EF4444',
    ];
@endphp

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 id="greeting">{{ t('Selamat Datang,') }} {{ auth()->user()->name }}</h3>
            <p class="text-muted" id="currentDate"></p>
        </div>
        <div>

<a href="{{ route('assessments.create') }}"

class="btn btn-primary">

<i class="bi bi-plus-circle"></i>

{{ t('Assessment Baru') }}
</a>
<a href="{{ route('assessments.index') }}" class="btn btn-primary">
        <i class="bi bi-card-list"></i> {{ t('Semua Assessment') }}
    </a>

</div>

</div>

<div class="row g-3 mb-4">

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>{{ t('Total Assessment') }}</h6>

<h2>{{ $total }}</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>{{ t('Draft') }}</h6>

<h2 class="text-warning">

{{ $draft }}

</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>{{ t('Completed') }}</h6>

<h2 class="text-success">

{{ $completed }}

</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>{{ t('Overall Progress') }}</h6>

<h2>

{{ $overallProgress }}%

</h2>

<div class="progress">

<div class="progress-bar bg-success"

style="width:{{ $overallProgress }}%">

</div>

</div>

</div>

</div>

</div>

</div>

<div class="row mb-4">

    <div class="col-md-6 d-flex">

        <div class="card shadow-sm w-100 h-100">

            <div class="card-header">

                {{ t('Progress Assessment per Sektor') }}

            </div>

            <div class="card-body">

                @foreach($sectorProgress as $sector=>$progress)

                    <div class="mb-3">

                        <div class="d-flex justify-content-between">

                            <strong>{{ $sectorNames[$sector] ?? ucfirst($sector) }}</strong>

                            <span>{{ $progress }}%</span>

                        </div>

                        <div class="progress">

                            <div class="progress-bar
                            @if($progress<40)
                                bg-danger
                            @elseif($progress<80)
                                bg-warning
                            @else
                                bg-success
                            @endif"

                            style="width:{{ $progress }}%">

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

    <div class="col-md-6 d-flex">

        <div class="card shadow-sm w-100 h-100">

    <div class="card-header">
        {{ t('Distribusi Assessment') }}
    </div>

    <div class="card-body text-center">

        <div style="width:230px;height:200px;margin:0 auto;">
    <canvas id="sectorChart"></canvas>
</div>
<div class="d-flex justify-content-center flex-wrap gap-4 mt-3">
    @foreach($sectorChart as $sector => $total)
        <div class="d-flex align-items-center">
            <span style="width:12px;height:12px;border-radius:50%;background:{{ $sectorColors[$sector] }}; display:inline-block; margin-right:8px;"></span>
            <small>{{ $sectorNames[$sector] }}</small>
        </div>
    @endforeach
</div>

    </div>

</div>

    </div>

</div>

<div class="row mb-4">

    {{-- Draft Assessment --}}
    <div class="col-lg-6">

        <div class="card shadow-sm border-0 h-100">

            <div class="card-header bg-white">

                {{ t('Draft Assessment') }}

            </div>

            <div class="card-body">

                @forelse($draftAssessments as $draft)

                    @php

                        $route = match($draft->sector){
                            'infrastructure' => 'infrastructure.input',
                            'manufacturing' => 'manufacturing.input',
                            'agriculture' => 'agriculture.input',
                            'finance' => 'finance.input',
                            'mining' => 'mining.input',
                            default => null,

                        };

                    @endphp

                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom">

                        <div>

                            <strong>{{ $draft->company_name }}</strong>

                            <br>

                            <small class="text-muted">

                                {{ $sectorNames[$draft->sector] ?? ucfirst($draft->sector) }}

                            </small>

                        </div>

                        @if($route)

                        <a href="{{ route($route,$draft->id) }}"

                           class="btn btn-warning btn-sm">

                            <i class="bi bi-pencil-square"></i>

                            {{ t('Lanjut') }}

                        </a>

                        @endif

                    </div>

                @empty

                    <div class="text-center text-success py-4">

                        <i class="bi bi-check-circle-fill fs-2"></i>

                        <br>

                        {{ t('Semua Assessment telah selesai.') }}

                    </div>

                @endforelse

            </div>

        </div>

    </div>

    {{-- Aktivitas --}}
    <div class="col-lg-6">

        <div class="card shadow-sm border-0 h-100">

            <div class="card-header bg-white">

                {{ t('Aktivitas Terakhir') }}

            </div>

            <div class="card-body">

                @foreach($recentActivities as $activity)

                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom">

                        <div>

                            <strong>

                                {{ $activity->company_name }}

                            </strong>

                            <br>

                            <small>

                                {{ t(ucfirst($activity->status)) }}

                            </small>

                        </div>

                        <small class="text-muted">

                            {{ $activity->updated_at->diffForHumans() }}

                        </small>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</div>


<div class="card">

<div class="card-header">

{{ t('Daftar Assessment') }}

</div>

<div class="card-body">

<table class="table table-bordered align-middle text-center">
    <thead class="text-center">
        <tr>
            <th>{{ t('Perusahaan') }}</th>
            <th>{{ t('Sektor') }}</th>
            <th>{{ t('Progress') }}</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

@foreach($assessments as $assessment)

@if($assessment->status == 'completed')
<tr class="table-clickable"
    style="cursor:pointer"
    onclick="window.location='{{ route('assessments.report',$assessment->id) }}'">
@else
<tr>
@endif

<td>{{ $assessment->company_name }}</td>

<td>{{ $sectorNames[$assessment->sector] ?? $assessment->sector }}</td>

<td class="text-center align-middle" width="220">

<div class="d-flex justify-content-center">
    <div class="progress" style="width:200px;height:22px">

        <div class="progress-bar
            @if($assessment->progress<40)
                bg-danger
            @elseif($assessment->progress<80)
                bg-warning
            @else
                bg-success
            @endif"
            style="width:{{ $assessment->progress }}%">

            {{ $assessment->progress }}%

        </div>

    </div>
</div>

</td>

<td>

@php
    $route = match($assessment->sector) {
        'infrastructure' => 'infrastructure.input',
        'manufacturing'  => 'manufacturing.input',
        'agriculture'    => 'agriculture.input',
        'finance'        => 'finance.input',
        'mining'         => 'mining.input',
        default          => null,
    };
@endphp

@if($assessment->status == 'draft')

    @if($route)
        <a href="{{ route($route,$assessment->id) }}"
           class="btn btn-warning btn-sm">
            <i class="bi bi-pencil-square"></i>
            {{ t('Lanjut') }}
        </a>
    @endif

@else

    <span class="badge bg-success">
        {{ t('Completed') }}
    </span>

@endif

</td>

</tr>

@endforeach

</tbody>

</table>
<div class="d-flex justify-content-between align-items-center mt-3">

    <div class="text-muted small">
        {{ t('Menampilkan') }}
        <strong>{{ $assessments->firstItem() ?? 0 }}</strong>
        {{ t('sampai') }}
        <strong>{{ $assessments->lastItem() ?? 0 }}</strong>
        {{ t('dari') }}
        <strong>{{ $assessments->total() }}</strong>
        {{ t('data') }}
    </div>

    <nav>
        <ul class="pagination pagination-sm mb-0">

            {{-- Tombol Sebelumnya --}}
            @if ($assessments->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">{{ t('Sebelumnya') }}</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link"
                       href="{{ $assessments->previousPageUrl() }}">
                        {{ t('Sebelumnya') }}
                    </a>
                </li>
            @endif

            {{-- Nomor Halaman --}}
            @for ($i = 1; $i <= $assessments->lastPage(); $i++)
                <li class="page-item {{ $i == $assessments->currentPage() ? 'active' : '' }}">
                    <a class="page-link"
                       href="{{ $assessments->url($i) }}">
                        {{ $i }}
                    </a>
                </li>
            @endfor

            {{-- Tombol Berikutnya --}}
            @if ($assessments->hasMorePages())
                <li class="page-item">
                    <a class="page-link"
                       href="{{ $assessments->nextPageUrl() }}">
                        {{ t('Berikutnya') }}
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">{{ t('Berikutnya') }}</span>
                </li>
            @endif

        </ul>
    </nav>

</div>

</div>


</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    function updateGreeting() {

    const now = new Date();

    const hour = now.getHours();

    let greeting = "";

    if (hour < 11) {
        greeting = "{{ t('Selamat Pagi') }}";
    } else if (hour < 15) {
        greeting = "{{ t('Selamat Siang') }}";
    } else if (hour < 18) {
        greeting = "{{ t('Selamat Sore') }}";
    } else {
        greeting = "{{ t('Selamat Malam') }}";
    }

    document.getElementById("greeting").innerHTML =
        greeting + ", {{ auth()->user()->name }}";

    const options = {
        weekday: 'long',
        day: '2-digit',
        month: 'long',
        year: 'numeric'
    };

    document.getElementById("currentDate").innerHTML =
        now.toLocaleDateString("{{ app()->getLocale() == 'id' ? 'id-ID' : 'en-US' }}", options);
}

// Jalankan saat halaman dibuka
updateGreeting();

// Update setiap 1 menit
setInterval(updateGreeting, 60000);

// chart doughnut
const ctx = document.getElementById('sectorChart');
new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: @json(
    $sectorChart->keys()->map(function($sector) use ($sectorNames) {
        return $sectorNames[$sector] ?? ucfirst($sector);
    })
),
        datasets: [{
            data: @json($sectorChart->values()),
            backgroundColor: @json(
                $sectorChart->keys()->map(function($sector) use ($sectorColors){
                    return $sectorColors[$sector] ?? '#999999';
                })
            ),
            borderWidth: 3,
            borderColor: '#ffffff',
            radius: '82%',
            hoverOffset: 18,
            spacing: 3
        }]
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    
    cutout: '68%',
    plugins: {
        legend: {
            display: false
        }
    }
}

});
</script>
@endsection