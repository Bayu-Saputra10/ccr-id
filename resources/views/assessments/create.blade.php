@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-10 col-xxl-9">
            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-header bg-primary text-white py-3 px-3">
                    <h5 class="fw-bold mb-1">Informasi Dasar Perusahaan</h5>
                </div>

                <div class="card-body p-2 m-3">
                    <form action="{{ route('assessments.store') }}" method="POST">
                        @csrf
                    <div class="border rounded-3 bg-white p-3 mb-3">
                        <h5 class="fw-bold text-primary mb-3">Informasi Assessment</h5>
                            <div class="row g-3">
                            {{-- Sektor --}}
                            <div class="col-lg-4">
                                <label class="form-label fw-semibold">Sektor<span class="text-danger">*</span></label>
                                <select name="sector" id="sector" class="form-select" required>
                                    <option value="" selected disabled>Pilih Sektor</option>
                                    <option value="infrastructure" {{ old('sector')=='infrastructure'?'selected':'' }}>Infrastruktur</option>
                                    <option value="manufacturing" {{ old('sector')=='manufacturing'?'selected':'' }}>Manufaktur</option>
                                    <option value="agriculture" {{ old('sector')=='agriculture'?'selected':'' }}>Agrikultur</option>
                                    <option value="finance" {{ old('sector')=='finance'?'selected':'' }}>Keuangan</option>
                                    <option value="mining" {{ old('sector')=='mining'?'selected':'' }}>Energi & Pertambangan</option>
                                </select>
                            </div>
                        {{-- Subsektor --}}
                            <div class="col-lg-4">
                                <label class="form-label fw-semibold">Subsektor<span class="text-danger">*</span></label>
                                <select name="subsector" id="subsector" class="form-select" required>
                                    <option value="" selected disabled>Pilih Subsektor</option>
                                </select>
                            </div>
                            {{-- Tanggal --}}
                            <div class="col-lg-4">
                                <label class="form-label fw-semibold">Tanggal Penilaian<span class="text-danger">*</span></label>
                                <input type="date" name="assessment_date" class="form-control" value="{{ old('assessment_date') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-3 bg-white p-3 mb-3">
                        <h5 class="fw-bold text-primary mb-3">Informasi Perusahaan</h5>
                        {{-- Nama Perusahaan --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Perusahaan<span class="text-danger">*</span></label>
                            <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}" required>
                        </div>

                        {{-- Alamat --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Alamat<span class="text-danger">*</span></label>
                            <textarea name="address" rows="2" class="form-control" required>{{ old('address') }}</textarea>
                        </div>

                        <div class="row g-4">
                            {{-- Operator --}}
                                <div class="col-lg-6">
                                    <label class="form-label fw-semibold">Penginput Data<span class="text-danger">*</span></label>
                                    <input type="text" name="entry_operator" class="form-control" value="{{ old('entry_operator') }}" required>
                                </div>

                            {{-- Sumber Data --}}
                            <div class="col-lg-6">
                                <label class="form-label fw-semibold">Sumber Data Utama<span class="text-danger">*</span></label>
                                @php
                                    $oldSources = old('data_sources', []);
                                @endphp
                                <div class="border rounded-3 bg-white p-2">
                                    <div class="form-check mb-1">
                                        <input type="checkbox" class="form-check-input" name="data_source[]" value="Laporan Keuangan" id="lk" {{ in_array('Laporan Keuangan', $oldSources) ? 'checked' : '' }}>
                                        <label for="lk" class="form-check-label">Laporan Keuangan</label>
                                    </div>
                                    <div class="form-check mb-1">
                                        <input type="checkbox" class="form-check-input" name="data_source[]" value="Laporan Keberlanjutan" id="ls" {{ in_array('Laporan Keberlanjutan', $oldSources) ? 'checked' : '' }}>
                                        <label for="ls" class="form-check-label">Laporan Keberlanjutan</label>
                                    </div>
                                    <div class="form-check mb-1">
                                        <input type="checkbox" class="form-check-input" name="data_source[]" value="Dokumen Internal Lainnya" id="dl" {{ in_array('Dokumen Internal Lainnya', $oldSources) ? 'checked' : '' }}>
                                        <label for="dl" class="form-check-label">Dokumen Internal Lainnya</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Catatan --}}
                        <div class="mt-4">
                            <label class="form-label fw-semibold">Catatan<span class="text-danger">*</span></label>
                            <textarea name="notes" rows="3" class="form-control" required>{{ old('notes') }}</textarea>
                        </div>
                    </div>

                       <div class="d-flex justify-content-end">
                        <button class="btn btn-primary">Selanjutnya</button>
                       </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection