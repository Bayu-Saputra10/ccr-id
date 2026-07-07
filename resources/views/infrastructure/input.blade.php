@extends('layouts.app')
@section('content')
<div class="card-header">
    <h3>Indikator Infrastruktur</h3>
</div>

<div class="card-body">
    <div class="mb-3">
        <strong>Perusahaan :</strong>
        {{ $assessment->company_name }}
        <br>
        <strong>Tahun :</strong>
        {{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}
        <br>
        <strong>Penginput Data :</strong>
        {{ $assessment->entry_operator }}
    </div>
    <form action="{{ route('infrastructure.save', $assessment->id) }}" method="POST">

        @csrf

        <table class="table table-bordered table-striped">

            <thead class="table-dark">

                <tr>

                    <th width="80">
                        Dimension
                    </th>

                    <th width="120">
                        Indicator ID
                    </th>

                    <th>
                        Indicator Name
                    </th>

                    <th width="250">
                        Score
                    </th>

                    <th width="250">
                        Evidence
                    </th>

                    <th width="250">
                        Note
                    </th>

                </tr>

            </thead>

            <tbody>

            @foreach($indicators as $indicator)

                <tr>
                    <td data-bs-toggle="modal" data-bs-target="#indicatorModal{{ $indicator->id }}" style="cursor: pointer;">{{ $indicator->dimension }}</td>
                    <td data-bs-toggle="modal" data-bs-target="#indicatorModal{{ $indicator->id }}" style="cursor: pointer;">{{ $indicator->indicator_id }}</td>
                    <td data-bs-toggle="modal" data-bs-target="#indicatorModal{{ $indicator->id }}" style="cursor: pointer;">{{ $indicator->indicator_name }}</td>
                    <td>
                        <select
                            class="form-control"
                            name="score[{{ $indicator->id }}]">

                            <option value="">
                                Pilih Score
                            </option>

                            @foreach($indicator->scores as $score)

                                <option value="{{ $score->score }}">

                                    {{ $score->score }}
                                    -
                                    {{ $score->description }}

                                </option>

                            @endforeach

                        </select>

                    </td>

                    <td>

                        <select
                            class="form-control"
                            name="evidence[{{ $indicator->id }}]">

                            <option value="">
                                Pilih Evidence
                            </option>

                            @foreach($indicator->evidences as $evidence)

                                <option value="{{ $evidence->value }}">

                                    {{ $evidence->description }}

                                </option>

                            @endforeach

                        </select>

                    </td>

                    <td>

                        <textarea
                            class="form-control"
                            rows="2"
                            name="note[{{ $indicator->id }}]"></textarea>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

        <button
            type="submit"
            class="btn btn-success">

            Save Assessment

        </button>

    </form>

</div>
{{-- MODAL DEFINISI INDIKATOR --}}

@foreach($indicators as $indicator)

<div
    class="modal fade"
    id="indicatorModal{{ $indicator->id }}"
    tabindex="-1"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">

                    {{ $indicator->indicator_id }}
                    -
                    {{ $indicator->indicator_name }}

                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="mb-3">

                    <strong>Dimensi :</strong>
                    {{ $indicator->dimension }}

                </div>

                <hr>

                <h6>
                    Definisi Operasional
                </h6>

                <p>

                    {{ $indicator->definition }}

                </p>

            </div>

        </div>

    </div>

</div>

@endforeach
@endsection
