@extends('layouts.app')
@section('content')
@php
    function sortDirection($field) {
        return request('sort') == $field && request('direction') == 'asc' ? 'desc' : 'asc';
    }
@endphp

<div class="container-fluid">
    <div class="card report-card">
        <div class="card-header report-header d-flex justify-content-between align-items-center bg-primary text-white">
            <h5 class="mb-0 fw-bold">
                <i class="bi bi-clipboard-data me-2"></i> Daftar Assessment
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="card mb-3 shadow-sm">

    <div class="card-body">

        <form method="GET">

            <div class="row">

                <div class="col-md-4">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        class="form-control"
                        placeholder="Cari perusahaan, subsektor, operator">

                </div>

                <div class="col-md-2">

                    <select
                        name="year"
                        class="form-select">

                        <option value="">

                            Semua Tahun

                        </option>

                        @foreach($years as $year)

                        <option
                            value="{{ $year }}"
                            {{ request('year')==$year?'selected':'' }}>

                            {{ $year }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="col-md-2">
                    <select name="sector" class="form-select">
                        <option value="">Semua Sektor</option>
                        @foreach($sectors as $sector)
                        <option value="{{ $sector }}"
                            {{ request('sector')==$sector?'selected':'' }}>
                            {{ \App\Models\Assessment::SECTOR_LABELS[$sector] }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">

                    <select
                        name="per_page"
                        class="form-select">

                        @foreach([10,20,50,100] as $row)

                        <option
                            value="{{ $row }}"
                            {{ request('per_page',10)==$row?'selected':'' }}>

                            {{ $row }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="col-md-2 d-grid">

                    <button
                        class="btn btn-primary">

                        <i class="bi bi-search"></i>

                        Cari

                    </button>

                </div>

            </div>

            <div class="mt-3">

                <a
                    href="{{ route('assessments.index') }}"
                    class="btn btn-secondary btn-sm">

                    Reset Filter

                </a>

            </div>

        </form>

    </div>

</div>
                <table class="table list-table align-middle mb-0">
                    <thead>
                        <tr>
                            <th>
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'company_name',
    'direction'=>sortDirection('company_name')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>Perusahaan</span>

    @if(request('sort')=='company_name')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif

</a>
                            </th>
                            <th>
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'sector_name',
    'direction'=>sortDirection('sector_name')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>Sektor</span>

    @if(request('sort')=='sector_name')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif

</a>
                            </th>
                            <th>
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'assessment_date',
    'direction'=>sortDirection('assessment_date')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>Tanggal Penilaian</span>

    @if(request('sort')=='assessment_date')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif

</a>
                            </th>
                            <th class="score-column">
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'score_a',
    'direction'=>sortDirection('score_a')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>A</span>

    @if(request('sort')=='score_a')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif

</a>
                            </th>
                            <th class="score-column">
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'score_b',
    'direction'=>sortDirection('score_b')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>B</span>

    @if(request('sort')=='score_b')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif
                                </a>
                            </th>
                            <th class="score-column">
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'score_c',
    'direction'=>sortDirection('score_c')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>C</span>

    @if(request('sort')=='score_c')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif
                                </a>
                            </th>
                            <th class="score-column">
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'score_d',
    'direction'=>sortDirection('score_d')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>D</span>

    @if(request('sort')=='score_d')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif
                                </a>
                            </th>
                            <th class="score-column">
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'score_e',
    'direction'=>sortDirection('score_e')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>E</span>

    @if(request('sort')=='score_e')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'total_score',
    'direction'=>sortDirection('total_score')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>Total Score</span>

    @if(request('sort')=='total_score')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif
                                </a>
                            </th>
                            <th>Progress</th>
                            <th>
                                <a href="{{ route('assessments.index',
array_merge(request()->query(),[
    'sort'=>'status',
    'direction'=>sortDirection('status')
])) }}"
class="text-decoration-none text-dark fw-semibold d-inline-flex align-items-center gap-1">

    <span>Status</span>

    @if(request('sort')=='status')

        <i class="bi {{ request('direction')=='asc'
            ? 'bi-arrow-up'
            : 'bi-arrow-down' }}"></i>

    @else

        <i class="bi bi-arrow-down-up text-secondary"></i>

    @endif
                                </a>
                            </th>
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
                            <td class="fw-semibold">{{ $assessment->company_name }}</td>
                            <td>{{ $assessment->sector_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}</td>
                            <td class="score-column">{{ $assessment->status=='completed' ? number_format($assessment->score_a,2) : '-' }}</td>
                            <td class="score-column">{{ $assessment->status=='completed' ? number_format($assessment->score_b,2) : '-' }}</td>
                            <td class="score-column">{{ $assessment->status=='completed' ? number_format($assessment->score_c,2) : '-' }}</td>
                            <td class="score-column">{{ $assessment->status=='completed' ? number_format($assessment->score_d,2) : '-' }}</td>
                            <td class="score-column">{{ $assessment->status=='completed' ? number_format($assessment->score_e,2) : '-' }}</td>
                            <td><strong>{{ $assessment->status=='completed' ? number_format($assessment->total_score,2) : '-' }}</strong></td>
                            <td class="progress-column">
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
                        <td colspan="11" class="text-center py-5 text-muted">Belum ada assesment.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

    <div class="d-flex justify-content-between align-items-center mt-3">

    <div>
        Menampilkan
        <strong>{{ $assessments->firstItem() }}</strong>
        -
        <strong>{{ $assessments->lastItem() }}</strong>
        dari
        <strong>{{ $assessments->total() }}</strong>
        data
    </div>

    <div>

    <nav>
        <ul class="pagination pagination-sm mb-0">
            {{-- Previous --}}
            <li class="page-item {{ $assessments->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $assessments->previousPageUrl() }}">
                    &lt;
                </a>
            </li>
            {{-- Nomor Halaman --}}
            @for($i=1;$i<=$assessments->lastPage();$i++)
                <li class="page-item {{ $i==$assessments->currentPage()?'active':'' }}">
                    <a class="page-link" href="{{ $assessments->url($i) }}">
                        {{ $i }}
                    </a>
                </li>
            @endfor

            {{-- Next --}}
            <li class="page-item {{ !$assessments->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $assessments->nextPageUrl() }}">
                    &gt;
                </a>
            </li>

        </ul>
    </nav>
</div>

</div>

</div>
        </div>
    </div>
</div>
</div>
@endsection