@extends('layouts.app')
@section('content')

<div class="card-body">
    
    {{-- tombol pdf --}}
    <form action="{{ route('assessment.pdf',$assessment->id) }}" method="POST" id="pdfForm">
        @csrf
        <input type="hidden" name="radarImage" id="radarImage">
        <input type="hidden" name="barImage" id="barImage">
        <button class="btn btn-danger">Export PDF</button>
    </form>

    {{-- row 1 --}}
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">Profil Perusahaan</div>
                <table class="table table-sm table-bordered mb-0">
                    <tr>
                        <th>Nama Perusahaan</th>
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
                        <th>Tanggal Penilaian</th>
                        <td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}</td>
                    </tr>
                    <tr>
                        <th>Penginput Data</th>
                        <td>{{ $assessment->entry_operator }}</td>
                    </tr>
                    <tr>
                        <th>Sumber Data Utama</th>
                        <td>{{ $assessment->data_source }}</td>
                    </tr>
                    <tr>
                        <th>Catatan</th>
                        <td>{{ $assessment->notes }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">Climate Resilience Rating</div>
                <div class="card-body text-center">
                    <h1 class="display-2 fw-bold text-primary">{{ $assessment->grade }}</h1>
                    <h2>{{ number_format($assessment->total_score,0) }}</h2>
                    <hr>
                    <span class="badge bg-success fs-6">{{ $assessment->category }}</span>
                    <br><br>
                    {{ $assessment->interpretation_grade }}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">Executive Snapshot</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Dimensi Terkuat</th>
                            <td class="text-center fw-bold fs-3">{{ $assessment->strongest_dimension }}</td>
                        </tr>
                        <tr>
                            <th>Dimensi Terlemah</th>
                            <td class="text-center fw-bold fs-3">{{ $assessment->weakest_dimension }}</td>
                        </tr>
                    </table>
                    <canvas id="radarChart"></canvas>
                </div>
            </div>
        </div>
    </div>

        {{-- row 2 --}}
        <div class="row mb-3">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">CCRAM Dimension Score</div>
                    <table class="table table-sm table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Dimensi</th>
                                <th>Average Score</th>
                                <th>Bobot</th>
                                <th>Weighted Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A</td>
                                <td>{{ $averages['A'] }}</td>
                                <td>20%</td>
                                <td>{{ $assessment->score_a }}</td>
                            </tr>
                            <tr>
                                <td>B</td>
                                <td>{{ $averages['B'] }}</td>
                                <td>25%</td>
                                <td>{{ $assessment->score_b }}</td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td>{{ $averages['C'] }}</td>
                                <td>20%</td>
                                <td>{{ $assessment->score_c }}</td>
                            </tr>
                            <tr>
                                <td>D</td>
                                <td>{{ $averages['D'] }}</td>
                                <td>25%</td>
                                <td>{{ $assessment->score_d }}</td>
                            </tr>
                            <tr>
                                <td>E</td>
                                <td>{{ $averages['E'] }}</td>
                                <td>10%</td>
                                <td>{{ $assessment->score_e }}</td>
                            </tr>
                            <tr class="table-success">
                                <th colspan="3">Total Score</th>
                                <th>{{ $assessment->total_score }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header bg-primary text-white">CCRAM Rating Result</div>
                    <table class="table table-sm table-bordered mb-0">
                        <tr>
                            <th width="250">Grade</th>
                            <td>{{ $assessment->grade }}</td>
                        </tr>
                        <tr>
                            <th width="250">Category</th>
                            <td>{{ $assessment->category }}</td>
                        </tr>
                        <tr>
                            <th width="250">Gap Grade</th>
                            <td>
                                {{ $assessment->gap_to_next_grade }} poin menuju Grade {{ $assessment->next_grade }}
                            </td>
                        </tr>
                        <tr>
                            <th width="250">Prioritas Perbaikan</th>
                            <td>{{ $assessment->improvement_priority }}</td>
                        </tr>
                        <tr>
                            <th width="250">Management Recommendation</th>
                            <td>{{ $assessment->management_recommendation }}</td>
                        </tr>
                        <tr>
                            <th width="250">Sector Interpretation</th>
                            <td>{{ $assessment->interpretation }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

            <div class="card mb-3">
                <div class="card-header bg-primary text-white">Dimension Performance</div>
                <table class="table table-bordered table-sm mb-0">
                    <thead>
                        <tr>
                            <th>Dimensi</th>
                            <th>Nama Dimensi</th>
                            <th>Interpretasi</th>
                            <th>Average Score</th>
                            <th>Weighted</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dimensionPerformance as $row)
                            <tr>
                                <td>{{ $row['dimension'] }}</td>
                                <td>{{ $row['dimension_name'] }}</td>
                                <td>{{ $row['automatic_interpretation'] }}</td>
                                <td>{{ number_format($row['avg_score'],2) }}</td>
                                <td>{{ number_format($row['weighted_score'],2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary text-white">Assessment Detail Chart</div>
                <div class="card-body">
                    <canvas id="detailChart"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white">Assessment Detail</div>
                <table class="table table-bordered table-striped table-sm mb-0">
                    <thead>
                        <tr>
                            <th>Indicator ID</th>
                            <th>Indicator Name</th>
                            <th>Score</th>
                            <th>Sumber Bukti</th>
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