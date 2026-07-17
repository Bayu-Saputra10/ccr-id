@extends('layouts.app')
@section('content')

<div class="card-body">

    <div class="container-fluid">
        {{-- header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-0">Climate Resilience Report</h3>
                <small class="text-muted">
                    {{ $assessment->company_name }} * {{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}
                </small>
            </div>
            <form action="{{ route('assessment.pdf',$assessment->id) }}" method="POST" id="pdfForm">
                @csrf
                <input type="hidden" name="radarImage" id="radarImage">
                <input type="hidden" name="barImage" id="barImage">
                <button class="btn btn-danger">
                    <i class="fa-sharp fa-solid fa-file-export"></i> Export PDF
                </button>
            </form>
        </div>
        {{-- card --}}
        <div class="row g-3 mb-4">
            <div class="col-lg-3">
                <div class="summary-card">
                    <small>Total Score</small>
                    <h2>{{ number_format($assessment->total_score,2) }}</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="summary-card">
                    <small>Climate Grade</small>
                    <h2>{{ ($assessment->grade) }}</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="summary-card">
                    <small>Dimensi Terkuat</small>
                    <h2>{{ ($assessment->strongest_dimension) }}</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="summary-card">
                    <small>Dimensi Terlemah</small>
                    <h2>{{ ($assessment->weakest_dimension) }}</h2>
                </div>
            </div>
        </div>

        {{-- row 1 --}}
        <div class="row g-4 mb-4">
            {{-- profil --}}
            <div class="col-lg-6">
                <div class="card report-card h-100">
                    <div class="card-header report-header">
                        Profil Perusahaan
                    </div>
                    <div class="card-body p-0">
                        <table class="table profile-table mb-0">
                            <tbody>
                                <tr>
                                    <th>Perusahaan</th>
                                    <td>{{ $assessment->company_name }}</td>
                                </tr>
                                <tr>
                                    <th>Sektor</th>
                                    <td>{{ $assessment->sector_name }}</td>
                                </tr>
                                <tr>
                                    <th>Subsektor</th>
                                    <td>{{ $assessment->subsector }}</td>
                                </tr>
                                <tr>
                                    <th>Tahun Penilaian</th>
                                    <td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Penginput Data</th>
                                    <td>{{ $assessment->entry_operator }}</td>
                                </tr>
                                <tr>
                                    <th>Sumber Data</th>
                                    <td>{{ $assessment->data_source }}</td>
                                </tr>
                                <tr>
                                    <th>Catatan</th>
                                    <td>{{ $assessment->notes ?: '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- score dimensi --}}
            <div class="col-lg-6">
                <div class="card report-card h-100">
                    <div class="card-header report-header">
                        CCRAM Dimension Score  
                    </div>
                    <div class="card-body">
                        <table class="table dashboard-table mb-0">
                            <thead>
                                <tr>
                                    <th>Dimension</th>
                                    <th>Average Score</th>
                                    <th>Weight</th>
                                    <th>weighted Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>{{ number_format($averages['A'],2) }}</td>
                                    <td>20%</td>
                                    <td>{{ number_format($assessment->score_a,2) }}</td>
                                </tr>
                                <tr>
                                    <td>B</td>
                                    <td>{{ number_format($averages['B'],2) }}</td>
                                    <td>25%</td>
                                    <td>{{ number_format($assessment->score_b,2) }}</td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td>{{ number_format($averages['C'],2) }}</td>
                                    <td>20%</td>
                                    <td>{{ number_format($assessment->score_c,2) }}</td>
                                </tr>
                                <tr>
                                    <td>D</td>
                                    <td>{{ number_format($averages['D'],2) }}</td>
                                    <td>25%</td>
                                    <td>{{ number_format($assessment->score_d,2) }}</td>
                                </tr>
                                <tr>
                                    <td>E</td>
                                    <td>{{ number_format($averages['E'],2) }}</td>
                                    <td>10%</td>
                                    <td>{{ number_format($assessment->score_e,2) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- row 2 --}}
        <div class="row g-4 mb-4">
            {{-- hasil rating --}}
            <div class="col-lg-12">
                <div class="card report-card h-100">
                    <div class="card-header report-header">
                        CCRAM Rating Result
                    </div>
                    <div class="card-body p-0">
                        <table class="table profile-table mb-0">
                            <tbody>
                                <tr>
                                    <th>Grade</th>
                                    <td><strong>{{ $assessment->grade }}</strong></td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{ $assessment->category }}</td>
                                </tr>
                                <tr>
                                    <th>Gap Grade</th>
                                    <td>{{ $assessment->gap_to_next_grade }} poin menuju Grade {{ $assessment->next_grade }}</td>
                                </tr>
                                <tr>
                                    <th>Priority</th>
                                    <td>{{ $assessment->improvement_priority }}</td>
                                </tr>
                                <tr>
                                    <th>Interpretation</th>
                                    <td>{{ $assessment->interpretation }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- row 3 --}}
        <div class="row g-4 mb-4">
            <div class="col-lg-12">
                <div class="card report-card h-100">
                    <div class="card-header report-header">
                        Dimension Performance
                    </div>
                    <div class="card-body">
                        @foreach ($dimensionPerformance as $row)
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                            <strong>{{ $row['dimension'] }} - {{ $row['dimension_name'] }}</strong>
                            <span>{{ number_format($row['avg_score'],2) }}/5</span>
                        </div>
                        <div class="progress" role="progressbar" style="height: 12px;">
                            <div class="progress-bar" style="width: {{ ($row['avg_score']/5)*100 }}%;"></div>
                        </div>
                        <small class="text-muted">
                        <strong>Weighted Score: {{ number_format($row['weighted_score'],2) }}</strong> <br> {{ $row['automatic_interpretation'] }}</small>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- row 4 --}}
    <div class="row g-4 mb-4">
        <div class="col-lg-6">
            <div class="card report-card h-100">
                <div class="card report-card">
                    <div class="card-header report-header">Climate Resilience Radar</div>
                    <div class="card-body h-100">
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card report-card h-100">
                <div class="card-header report-header">Assessment Detail Chart</div>
                <div class="card-body">
                    <div class="chart-box">
                        <canvas id="detailChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- row 5 --}}
    <div class="card report-card">
        <div class="card-header report-header">
            Assessment Detail
        </div>
        <table class="table assessment-table mb-0">
            <thead>
                <tr>
                    <th>Indicator ID</th>
                    <th>Indicator Name</th>
                    <th>Score</th>
                    <th>Sumber Bukti</th>
                    <th>Dokumen Pendukung</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($answers as $answer)
                    <tr>
                        <td>{{ $answer->indicator->indicator_id }}</td>
                        <td>{{ $answer->indicator->indicator_name }}</td>
                        <td>
                            <strong>{{ $answer->score }}</strong>
                            -
                            {{ $answer->score_description }}
                        </td>
                        <td>{{ $answer->evidence_description }}</td>
                        <td>
                            @if ($answer->evidence_file)
                                @php
                                    $extension = strtolower(pathinfo($answer->evidence_file, PATHINFO_EXTENSION));
                                @endphp

                                @if ($extension=='pdf')
                                    <span class="badge bg-danger">PDF</span>
                                @else
                                    <span class="badge bg-success">Image</span>
                                @endif
                                <br>
                                <a href="{{ asset('storage/'.$answer->evidence_file) }}" class="btn btn-sm btn-outline-primary mt-2" target="_blank">
                                    <i class="bi bi-eye"></i> Lihat File
                                </a>
                            @else
                                <span class="badge bg-secondary">Tidak diupload</span>
                            @endif
                        </td>
                        <td>{{ $answer->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const radarChart = new Chart(document.getElementById('radarChart'), {
        type: 'radar',
        data: {
            labels: ['A','B','C','D','E'],
            datasets: [{
                label: 'Dimension Score',
                data: [
                    {{ $averages['A'] }},
                    {{ $averages['B'] }},
                    {{ $averages['C'] }},
                    {{ $averages['D'] }},
                    {{ $averages['E'] }}
                ],
                pointBackgroundColor: [
                '#a7c7e7',
                '#b7e4c7',
                '#fde2a7',
                '#f8c8c8',
                '#d8c4f1'
                ]
            }]
        },
        options: {
            responsive:true,
            maintainAspectRatio:false,
            scales: {
                r: {
                    min: 0,
                    max: 5
                }
            }
        }
    });
    const detailChart = new Chart(document.getElementById('detailChart'), {
        type: 'bar',
        data: {
            labels: ['A','B','C','D','E'],
            datasets: [{
                label: 'Average Score',
                data: [
                    {{ $averages['A'] }},
                    {{ $averages['B'] }},
                    {{ $averages['C'] }},
                    {{ $averages['D'] }},
                    {{ $averages['E'] }},
                ],
                backgroundColor: [
                    '#a7c7e7',
                    '#b7e4c7',
                    '#fde2a7',
                    '#f8c8c8',
                    '#d8c4f1'
                ],
                borderColor: [
                '#6ea8d7',
                '#7bc69d',
                '#f4c95d',
                '#e5985d',
                '#b497d6'
                ],
                borderWidth:2,
                borderRadius:8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio:false,
            scales: {
                y: {
                    min: 0,
                    max: 5
                }
            }
        }
    });
    document.getElementById('pdfForm').addEventListener('submit', function() {
        document.getElementById('radarImage').value = radarChart.toBase64Image();

        document.getElementById('barImage').value = detailChart.toBase64Image();
    });
</script>

@endsection