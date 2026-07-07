@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">
        <h3>Daftar Assessment</h3>
        <a href="{{ route('assessments.create') }}" class="btn btn-primary">New Assessment</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Perusahaan</th>
                    <th>Sektor</th>
                    <th>Tahun</th>
                    <th>Score A</th>
                    <th>Score B</th>
                    <th>Score C</th>
                    <th>Score D</th>
                    <th>Score E</th>
                    <th>Total Score</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @forelse($assessments as $assessment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $assessment->company_name }}</td>
                    <td>{{ $assessment->sector_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}</td>
                    <td>{{ number_format($assessment->score_a ?? 0,2) }}</td>
                    <td>{{ number_format($assessment->score_b ?? 0,2) }}</td>
                    <td>{{ number_format($assessment->score_c ?? 0,2) }}</td>
                    <td>{{ number_format($assessment->score_d ?? 0,2) }}</td>
                    <td>{{ number_format($assessment->score_e ?? 0,2) }}</td>
                    <td>
                        <strong>{{ number_format($assessment->total_score ?? 0,2) }}</strong>
                    </td>
                    <td><a href="{{ route('assessments.report', $assessment->id) }}"
                            class="btn btn-success btn-sm">Report</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="text-center">No Assessment Found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection