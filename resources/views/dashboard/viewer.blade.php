@extends('layouts.app')

@section('content')

<div class="container">

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
    <h3 id="greeting">
    Selamat Datang, {{ auth()->user()->name }}
</h3>

<p class="text-muted" id="currentDate"></p>
</div>

<div>

<a href="{{ route('assessments.create') }}"

class="btn btn-primary">

<i class="bi bi-plus-circle"></i>

Assessment Baru
</a>
<a href="{{ route('assessments.index') }}" class="btn btn-primary">
        <i class="bi bi-card-list"></i> Semua Assessment
    </a>

</div>

</div>

<div class="row g-3 mb-4">

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>Total Assessment</h6>

<h2>{{ $total }}</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>Draft</h6>

<h2 class="text-warning">

{{ $draft }}

</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>Completed</h6>

<h2 class="text-success">

{{ $completed }}

</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6>Overall Progress</h6>

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

    <div class="col-md-6">

        <div class="card shadow-sm">

            <div class="card-header">

                Progress Assessment per Sektor

            </div>

            <div class="card-body">

                @foreach($sectorProgress as $sector=>$progress)

                    <div class="mb-3">

                        <div class="d-flex justify-content-between">

                            <strong>{{ ucfirst($sector) }}</strong>

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

    <div class="col-md-6">

        <div class="card shadow-sm mb-4">

    <div class="card-header">
        Distribusi Assessment
    </div>

    <div class="card-body text-center">

        <div style="max-width:280px;margin:auto">

            <canvas id="sectorChart"></canvas>

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

                <strong>Draft Assessment</strong>

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

                                {{ ucfirst($draft->sector) }}

                            </small>

                        </div>

                        @if($route)

                        <a href="{{ route($route,$draft->id) }}"

                           class="btn btn-warning btn-sm">

                            <i class="bi bi-pencil-square"></i>

                            Lanjut

                        </a>

                        @endif

                    </div>

                @empty

                    <div class="text-center text-success py-4">

                        <i class="bi bi-check-circle-fill fs-2"></i>

                        <br>

                        Semua Assessment telah selesai.

                    </div>

                @endforelse

            </div>

        </div>

    </div>

    {{-- Aktivitas --}}
    <div class="col-lg-6">

        <div class="card shadow-sm border-0 h-100">

            <div class="card-header bg-white">

                <strong>Aktivitas Terakhir</strong>

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

                                {{ ucfirst($activity->status) }}

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

Daftar Assessment

</div>

<div class="card-body">

<table class="table table-bordered">

<thead>

<tr>

<th>No</th>

<th>Perusahaan</th>

<th>Sektor</th>

<th>Progress</th>

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

<td>{{ $loop->iteration }}</td>

<td>{{ $assessment->company_name }}</td>

<td>{{ $assessment->sector }}</td>

<td width="220">

<div class="progress" style="height:22px">

<div class="progress-bar
    @if($assessment->progress<40) bg-danger
    @elseif($assessment->progress<80) bg-warning
    @else bg-success
    @endif"

style="width:{{ $assessment->progress }}%">

{{ $assessment->progress }}%

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
            Lanjut
        </a>
    @endif

@else

    <span class="badge bg-success">
        Completed
    </span>

@endif

</td>

</tr>

@endforeach

</tbody>

</table>

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
        greeting = "Selamat Pagi";
    } else if (hour < 15) {
        greeting = "Selamat Siang";
    } else if (hour < 18) {
        greeting = "Selamat Sore";
    } else {
        greeting = "Selamat Malam";
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
        now.toLocaleDateString('id-ID', options);
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

        labels: @json($sectorChart->keys()),

        datasets: [{
            data: @json($sectorChart->values()),

            backgroundColor: [
                '#4F46E5',
                '#10B981',
                '#F59E0B',
                '#EF4444',
                '#06B6D4'
            ],

            borderWidth: 3,

            hoverOffset: 15
        }]
    },

    options:{

    responsive:true,

    maintainAspectRatio:true,

    aspectRatio:1,

    cutout:'65%',

    plugins:{
        legend:{
            position:'bottom'
        }
    }

}

});
</script>
@endsection