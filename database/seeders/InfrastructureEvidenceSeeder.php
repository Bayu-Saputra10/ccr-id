<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Infrastructure;
use App\Models\InfrastructureEvidence;

class InfrastructureEvidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evidences = [

        'A1' => [
            1 => 'Piagam dewan',
            2 => 'Notulen rapat dewan',
            3 => 'Annual Report',
            4 => 'Sustainability Report'
        ],
        'A2' => [
            1 => 'Struktur organisasi',
            2 => 'Job description',
            3 => 'KPI manajemen',
            4 => 'Laporan manajemen'
        ],
        'A3' => [
            1 => 'SK komite',
            2 => 'TOR',
            3 => 'Agenda rapat',
            4 => 'Notulen rapat'
        ],
        'A5' => [
            1 => 'Sustainability Report',
            2 => 'Annual Report',
            3 => 'Laporan TCFD',
            4 => 'Assurance'
        ],

        'B1' => [
            1 => 'Risk register',
            2 => 'Dokumen ERM',
            3 => 'Laporan TCFD'
        ],
        'B2' => [
            1 => 'Dokumen strategi',
            2 => 'Analisis keuangan',
            3 => 'Laporan manajemen'
        ],
        'B5' => [
            1 => 'Peta SDGs',
            2 => 'Sustainability Report',
            3 => 'ISSB disclosure'
        ],

        'C1' => [
            1 => 'Climate risk assessment',
            2 => 'Data IPCC/BMKG',
            3 => 'Peta risiko aset'
        ],
        'C2' => [
            1 => 'SOP risiko',
            2 => 'Manual ERM',
            3 => 'Simulasi risiko'
        ],
        'C3' => [
            1 => 'Framework ERM',
            2 => 'Risk matrix',
            3 => 'Laporan ke dewan'
        ],
        'C4' => [
            1 => 'Annual Report',
            2 => 'Sustainability Report',
            3 => 'Assurance'
        ],

        'D1' => [
            1 => 'Inventaris GRK',
            2 => 'GHG Protocol',
            3 => 'Laporan verifikasi'
        ],
        'D4' => [
            1 => 'Rencana investasi',
            2 => 'CAPEX adaptasi',
            3 => 'Laporan proyek'
        ],
        'D5' => [
            1 => 'Laporan operasional',
            2 => 'Indikator aset',
            3 => 'Evaluasi dampak'
        ],
        'D6' => [
            1 => 'Laporan operasional',
            2 => 'Indikator aset',
            3 => 'Evaluasi dampak'
        ],

        'E3' => [
            1 => 'Kebijakan SDM',
            2 => 'Program pekerja',
            3 => 'Laporan sosial'
        ],
        'E4' => [
            1 => 'Program CSR',
            2 => 'Laporan dampak',
            3 => 'MoU kemitraan'
        ],
        'E5' => [
            1 => 'Sistem pengaduan',
            2 => 'Laporan keluhan',
            3 => 'Portal publik'
        ],
        'E6' => [
            1 => 'MoU',
            2 => 'Laporan program',
            3 => 'Evaluasi dampak'
        ],

        ];

        foreach ($evidences as $indicatorCode => $items) {
            $indicator = Infrastructure::where(
                'indicator_id', $indicatorCode
            )->first();

            if (!$indicator) {
                continue;
            }

            foreach ($items as $value => $description) {
                InfrastructureEvidence::create([
                    'infrastructure_id' => $indicator->id,
                    'value' => $value,
                    'description' => $description,
                ]);
            }
        }
    }
}
