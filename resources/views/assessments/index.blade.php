@extends('layouts.app')
@section('content')
<div class="card">

    <div class="card-header d-flex justify-content-between">
        <h3>Daftar Assessment</h3>
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
                    <th>Status</th>
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
                    <td>{{ $assessment->status=='completed' ? number_format($assessment->score_a,2) : '-' }}</td>
                    <td>{{ $assessment->status=='completed' ? number_format($assessment->score_b,2) : '-' }}</td>
                    <td>{{ $assessment->status=='completed' ? number_format($assessment->score_c,2) : '-' }}</td>
                    <td>{{ $assessment->status=='completed' ? number_format($assessment->score_d,2) : '-' }}</td>
                    <td>{{ $assessment->status=='completed' ? number_format($assessment->score_e,2) : '-' }}</td>
                    <td><strong>{{ $assessment->status=='completed' ? number_format($assessment->total_score,2) : '-' }}</strong></td>
                    <td>
                        @if($assessment->status=='completed')
                        <span class="badge bg-success">Completed</span>
                        @else
                        <span class="badge bg-warning text-dark">Draft</span>
                        @endif
                    </td>
                    <td>
                        @if ($assessment->status=='completed')
                        <a href="{{ route('assessments.report', $assessment->id) }}" class="btn btn-success btn-sm">
                            Report
                        </a>
                        @endif

                        @if ($assessment->status=='draft')
                            <a href="{{ route('assessments.edit',$assessment->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Lanjutkan
                            </a>
                        @else
                            <a href="{{ route('assessments.edit',$assessment->id) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                        @endif
                        <form action="{{ route('assessments.destroy',$assessment->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus assessment ini?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12" class="text-center">No Assessment Found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection