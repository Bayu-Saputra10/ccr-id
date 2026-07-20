@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card report-card">
        <div class="card-header report-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">
                <i class="bi bi-clipboard-data me-2"></i> Daftar Assessment
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table list-table align-middle mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Perusahaan</th>
                            <th>Sektor</th>
                            <th width="150">Tahun Penilaian</th>
                            <th>Score A</th>
                            <th>Score B</th>
                            <th>Score C</th>
                            <th>Score D</th>
                            <th>Score E</th>
                            <th>Total Score</th>
                            <th>Progress</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($assessments as $assessment)
                        <tr 
                        @if ($assessment->status=='completed')
                            onclick="window.location='{{ route('assessments.report',$assessment->id) }}'"
                        @endif
                        >
                            <td>{{ $loop->iteration }}</td>
                            <td class="fw-semibold">{{ $assessment->company_name }}</td>
                            <td>{{ $assessment->sector_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}</td>
                            <td>{{ $assessment->status=='completed' ? number_format($assessment->score_a,2) : '-' }}</td>
                            <td>{{ $assessment->status=='completed' ? number_format($assessment->score_b,2) : '-' }}</td>
                            <td>{{ $assessment->status=='completed' ? number_format($assessment->score_c,2) : '-' }}</td>
                            <td>{{ $assessment->status=='completed' ? number_format($assessment->score_d,2) : '-' }}</td>
                            <td>{{ $assessment->status=='completed' ? number_format($assessment->score_e,2) : '-' }}</td>
                            <td><strong>{{ $assessment->status=='completed' ? number_format($assessment->total_score,2) : '-' }}</strong></td>
                            <td width="220">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <small class="fw-semibold text-dark">Progress: </small>
                                    <small class="fw-bold text-dark"> {{ $assessment->progress }}%</small>
                                </div>

<div class="progress" style="height: 12px;">
    <div class="progress-bar
        @if($assessment->progress == 100)
            bg-success
        @elseif($assessment->progress >= 50)
            bg-warning
        @else
            bg-danger
        @endif"
        role="progressbar"
        style="width: {{ $assessment->progress }}%;"
        aria-valuenow="{{ $assessment->progress }}"
        aria-valuemin="0"
        aria-valuemax="100">
    </div>
</div>
                            </td>
                            <td>
                                @if($assessment->status=='completed')
                                <span class="badge bg-success rounded-pill">Completed</span>
                                @else
                                <span class="badge bg-warning text-dark rounded-pill">Draft</span>
                                @endif
                            </td>
                            <td onclick="event.stopPropagation();">
                                <div class="d-flex justify-content-center gap-2">
                                @if ($assessment->status=='draft')
                                    <a href="{{ route('assessments.edit',$assessment->id) }}" class="btn btn-warning btn-sm" title="Edit Draft">Lanjutkan</a>
                                @else
                                    <a href="{{ route('assessments.edit',$assessment->id) }}" class="action-icon action-edit" title="Edit"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                @endif
                                @if(auth()->user()->role == 'admin')
                                <form action="{{ route('assessments.destroy',$assessment->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn p-0 border-0 bg-transparent action-icon action-delete" onclick="return confirm('Yakin ingin menghapus assessment ini?')"><i class="fa-sharp fa-solid fa-trash"></i></button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="12" class="text-center py-5 text-muted">Belum ada assesment.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection