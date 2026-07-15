@extends('layouts.app')
@section('content')
<div class="card-header">
    <h3>Indikator Energi & Pertambangan</h3>
</div>

<div class="card-body">
    <div class="mb-3">
        <strong>Perusahaan :</strong>
        {{ $assessment->company_name }}
        <br>
        <strong>Subsektor :</strong>
        {{ $assessment->subsector }}
        <br>
        <strong>Tahun :</strong>
        {{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}
    </div>
    <form action="{{ route('mining.save', $assessment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th width="80">Dimensi</th>
                    <th width="120">ID Indikator</th>
                    <th>Nama Indicator</th>
                    <th width="250">Score</th>
                    <th width="250">Sumber Bukti</th>
                    <th width="220">Upload Bukti</th>
                    <th width="250">Catatan</th>
                </tr>
            </thead>
            <tbody>
            @foreach($indicators as $indicator)
                <tr>
                    <td data-bs-toggle="modal" data-bs-target="#indicatorModal{{ $indicator->id }}" style="cursor: pointer;">{{ $indicator->dimension }}</td>
                    <td data-bs-toggle="modal" data-bs-target="#indicatorModal{{ $indicator->id }}" style="cursor: pointer;">{{ $indicator->indicator_id }}</td>
                    <td data-bs-toggle="modal" data-bs-target="#indicatorModal{{ $indicator->id }}" style="cursor: pointer;">{{ $indicator->indicator_name }}</td>
                    <td>
                        <select class="form-control" name="score[{{ $indicator->id }}]">
                            <option value="" selected disabled>Pilih Score</option>
                            @foreach($indicator->scores as $score)
                                <option value="{{ $score->score }}" {{ old('score.'.$indicator->id, optional($indicator->answer)->score)==$score->score ? 'selected' : '' }}>
                                    {{ $score->score }} - {{ $score->description }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select
                            class="form-control"
                            name="evidence[{{ $indicator->id }}]">
                            <option value="" selected disabled>Pilih Sumber Bukti</option>
                            @foreach($indicator->evidences as $evidence)
                                <option value="{{ $evidence->value }}" {{ old('evidence.'.$indicator->id, optional($indicator->answer)->evidence)==$evidence->value ? 'selected' : '' }}>
                                    {{ $evidence->description }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="file" name="evidence_file[{{ $indicator->id }}]" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                        @if (optional($indicator->answer)->evidence_file)
                        <div class="mt-2">
                            <a href="{{ asset('storage/'.optional($indicator->answer)->evidence_file) }}" class="btn btn-sm btn-outline-primary" target="_blank">
                                <i class="bi bi-paperclip">Lihat File</i>
                            </a>
                            <small class="text-muted">
                                    Format: PDF, JPG, JPEG, PNG<br>Maksimal ukuran file: <strong>2 MB</strong>
                                </small>
                        </div>
                        @endif
                    </td>
                    <td>
                        <textarea class="form-control" rows="2" name="note[{{ $indicator->id }}]"></textarea>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

{{-- pop up definisi indikator --}}
@foreach($indicators as $indicator)
<div class="modal fade" id="indicatorModal{{ $indicator->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    {{ $indicator->indicator_id }} - {{ $indicator->indicator_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <strong>Dimensi :</strong>
                    {{ $indicator->dimension }}
                </div>
                <hr>
                <h6>Definisi Operasional</h6>
                <p>{{ $indicator->definition }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection