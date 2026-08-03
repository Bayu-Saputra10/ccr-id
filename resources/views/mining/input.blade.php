@extends('layouts.app')
@section('content')
<div class="px-3">
    <h3 class="fw-bold mb-4">{{ t('Indikator Energi & Pertambangan') }}</h3>

    <div class="mb-3">
        <strong>{{ t('Perusahaan') }} :</strong>
        {{ $assessment->company_name }}
        <br>
        <strong>{{ t('Subsektor') }} :</strong>
        {{ $assessment->subsector }}
        <br>
        <strong>{{ t('Tahun') }} :</strong>
        {{ \Carbon\Carbon::parse($assessment->assessment_date)->locale(app()->getLocale())->translatedFormat('d F Y') }}
        <br>
    <strong>{{ t('Status') }} :</strong>
    @if ($assessment->status == 'draft')
        <span class="badge bg-warning text-dark">{{ t('Draft') }}</span>
    @else
        <span class="badge bg-success">{{ t('Completed') }}</span>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    </div>

    <form action="{{ route('mining.save', $assessment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th width="80">{{ t('Dimensi') }}</th>
                    <th width="120">{{ t('ID Indikator') }}</th>
                    <th>{{ t('Nama Indicator') }}</th>
                    <th width="250">{{ t('Score') }}</th>
                    <th width="250">{{ t('Sumber Bukti') }}</th>
                    <th width="220">{{ t('Upload Bukti') }}</th>
                    <th width="250">{{ t('Catatan') }}</th>
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
                            <option value="" selected disabled>{{ t('Pilih Score') }}</option>
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
                            <option value="" selected disabled>{{ t('Pilih Sumber Bukti') }}</option>
                            @foreach($indicator->evidences as $evidence)
                                <option value="{{ $evidence->value }}" {{ old('evidence.'.$indicator->id, optional($indicator->answer)->evidence)==$evidence->value ? 'selected' : '' }}>
                                    {{ $evidence->description }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>

<div class="upload-area">

    <input
        type="file"
        name="evidence_file[{{ $indicator->id }}]"
        class="evidence-file d-none"
        accept=".pdf,.jpg,.jpeg,.png">

    <div class="upload-box">
<i class="bi bi-cloud-arrow-up text-primary fs-4"></i>

    <div class="fw-semibold small mt-1">
        {{ t('Upload File') }}
    </div>

    <div class="text-muted mt-1" style="font-size:10px; line-height:1.3;">
        {{ t('PDF, JPG, JPEG, PNG') }}<br>
        {{ t('Maks. 2 MB') }}
    </div>

    <div class="text-primary mt-2" style="font-size:10px;">
        {{ t('Drag & Drop / Klik') }}
    </div>

    <div class="text-muted" style="font-size:9px;">
        {{ t('Ctrl + V') }}
    </div>

    </div>

    <div class="upload-preview mt-2 text-center">

        @if(optional($indicator->answer)->evidence_file)

            <a href="{{ asset('storage/'.optional($indicator->answer)->evidence_file) }}"
               target="_blank"
               class="btn btn-sm btn-outline-primary">

                <i class="bi bi-eye"></i>

                {{ t('Lihat File') }}

            </a>

        @endif

    </div>

</div>

</td>
                    <td>
                        <textarea class="form-control" rows="2" name="note[{{ $indicator->id }}]"></textarea>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end gap-2 mt-3">
            <button type="submit" name="action" value="draft" class="btn btn-warning">{{ t('Simpan Draft') }}</button>

            <button type="submit" name="action" value="submit" class="btn btn-success">{{ t('Simpan Assessment') }}</button>
        </div>
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
                    <strong>{{ t('Dimensi') }} :</strong>
                    {{ $indicator->dimension }}
                </div>
                <hr>
                <h6>{{ t('Definisi Operasional') }}</h6>
                <p>{{ $indicator->definition }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@push('scripts')

<script>

document.addEventListener('DOMContentLoaded',function(){

const MAX=2*1024*1024;

const allowed=['pdf','jpg','jpeg','png'];

document.querySelectorAll('.upload-area').forEach(function(area){

const input=area.querySelector('.evidence-file');

const box=area.querySelector('.upload-box');

box.onclick=function(){

input.click();

};

function validate(file){

const ext=file.name.split('.').pop().toLowerCase();

if(!allowed.includes(ext)){

Swal.fire({
    icon: 'warning',
    title: '{{ t("Format File Tidak Didukung") }}',
    text: '{{ t("Hanya file PDF, JPG, JPEG, dan PNG yang diperbolehkan.") }}'
});

return false;

}

if(file.size>MAX){

Swal.fire({
    icon: 'warning',
    title: '{{ t("Ukuran File Terlalu Besar") }}',
    text: '{{ t("Ukuran file maksimal adalah 2 MB.") }}'
});

return false;

}

return true;

}

function setFile(file){

if(!validate(file)) return;

const dt=new DataTransfer();

dt.items.add(file);

input.files=dt.files;
const preview = area.querySelector('.upload-preview');

box.innerHTML = `
<i class="bi bi-check-circle-fill text-success fs-4"></i>

<div class="small fw-semibold mt-1 text-truncate" title="${file.name}">
    ${file.name}
</div>

<div style="font-size:11px;" class="text-muted">
    ${(file.size/1024).toFixed(1)} KB
</div>
`;

const url = URL.createObjectURL(file);

preview.innerHTML = `
<a href="${url}"
   target="_blank"
   class="btn btn-sm btn-outline-primary mt-2">

    <i class="bi bi-eye"></i>

    {{ t('Lihat File') }}

</a>
`;

}

input.onchange=function(){

if(this.files.length){

setFile(this.files[0]);

}

};

box.addEventListener('dragover',function(e){

e.preventDefault();

box.classList.add('dragover');

});

box.addEventListener('dragleave',function(){

box.classList.remove('dragover');

});

box.addEventListener('drop',function(e){

e.preventDefault();

box.classList.remove('dragover');

if(e.dataTransfer.files.length){

setFile(e.dataTransfer.files[0]);

}

});

box.addEventListener('paste',function(e){

const items=e.clipboardData.items;

for(let item of items){

if(item.kind==='file'){

setFile(item.getAsFile());

break;

}

}

});

});

});

</script>

@endpush
@endsection