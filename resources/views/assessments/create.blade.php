@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Climate Resilience Assessment</h4>
                    <small>Input informasi dasar perusahaan</small>
                </div>

                <div class="card-body">
                    <form action="{{ route('assessments.store') }}" method="POST">
                        @csrf
                        <div class="row">

                            {{-- Sektor --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Sektor</label>
                                <select name="sector" class="form-select">
                                    <option value="">Pilih Sektor</option>
                                    <option value="infrastructure" {{ old('sector')=='infrastructure'?'selected':'' }}>Infrastruktur</option>
                                    <option value="manufacturing" {{ old('sector')=='manufacturing'?'selected':'' }}>Manufaktur</option>
                                    <option value="agriculture" {{ old('sector')=='agriculture'?'selected':'' }}>Agrikultur</option>
                                    <option value="finance" {{ old('sector')=='finance'?'selected':'' }}>Keuangan</option>
                                    <option value="mining" {{ old('sector')=='mining'?'selected':'' }}>Energi & Pertambangan</option>
                                </select>
                            </div>

                            {{-- Tanggal --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Tanggal Penilaian</label>
                                <input type="date" name="assessment_date" class="form-control" value="{{ old('assessment_date') }}" required>
                            </div>

                        </div>

                        {{-- Nama Perusahaan --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Perusahaan</label>
                            <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}" required>
                        </div>

                        {{-- Subsektor --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Subsektor</label>
                            <input type="text" name="subsector" class="form-control" value="{{ old('subsector') }}" required>
                        </div>

                        {{-- Alamat --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat</label>
                            <textarea name="address" rows="2" class="form-control" required>{{ old('address') }}</textarea>
                        </div>

                        <div class="row">

                            {{-- Operator --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Penginput Data</label>
                                <input type="text" name="entry_operator" class="form-control" value="{{ old('entry_operator') }}" required>
                            </div>

                            {{-- Sumber Data --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Sumber Data Utama</label>
                                <select name="data_source" class="form-select">
                                    <option value="">Pilih Sumber Data</option>
                                    <option value="Laporan Keuangan" {{ old('data_source')=='Laporan Keuangan'?'selected':'' }}>Laporan Keuangan</option>
                                    <option value="Laporan Keberlanjutan" {{ old('data_source')=='Laporan Keberlanjutan'?'selected':'' }}>Laporan Keberlanjutan</option>
                                    <option value="Dokumen Internal Lainnya" {{ old('data_source')=='Dokumen Internal Lainnya'?'selected':'' }}>Dokumen Internal Lainnya</option>
                                </select>
                            </div>

                        </div>

                        {{-- Catatan --}}
                        <div class="mb-4">
                            <label class="form-label fw-bold">Catatan</label>
                            <textarea name="notes" rows="3" class="form-control">{{ old('notes') }}</textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-4">Lanjut Assessment</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection