<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agriculture;
use App\Models\AgricultureEvidence;

class AgricultureEvidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evidences = [
            
        'A1' => [
            1 => 'Board charter',
            2 => 'Notulen rapat dewan',
            3 => 'Annual Report',
            4 => 'Sustainability Report'
        ],
        'A2' => [
            1 => 'Struktur organisasi',
            2 => 'Job description',
            3 => 'KPI',
            4 => 'Laporan manajemen'
        ],
        'A3' => [
            1 => 'SK komite',
            2 => 'TOR',
            3 => 'Agenda rapat',
            4 => 'Notulen',
            5 => 'Laporan rekomendasi',
        ],
        'A5' => [
            1 => 'Annual Report',
            2 => 'Sustainability Report',
            3 => 'TCFD/ISSB report',
            4 => 'Assurance statement'
        ],

        'B1' => [
            1 => 'Risk register',
            2 => 'Dokumen ERM',
            3 => 'TCFD disclosure',
            4 => 'Strategic plan'
        ],
        'B2' => [
            1 => 'Business plan',
            2 => 'CAPEX/OPEX',
            3 => 'Scenario analysis',
            4 => 'Laporan keuangan'
        ],
        'B3' => [
            1 => 'Data BMKG/IPCC',
            2 => 'Laporan agroclimate assessment',
            3 => 'Peta risiko lahan'
        ],
        'B5' => [
            1 => 'Sustainability Report',
            2 => 'Peta SDGs',
            3 => 'ISSB-aligned disclosure'
        ],

        'C1' => [
            1 => 'Climate risk assessment',
            2 => 'Data IPCC/BMKG/BNPB',
            3 => 'Peta risiko aset'
        ],
        'C2' => [
            1 => 'SOP risiko iklim',
            2 => 'Manual ERM',
            3 => 'dashboard risiko',
            4 => 'BCP',
        ],
        'C3' => [
            1 => 'ERM Framework',
            2 => 'Risk matrix',
            3 => 'Laporan risiko ke dewan'
        ],
        'C4' => [
            1 => 'Annual Report',
            2 => 'Sustainability Report',
            3 => 'TCFD section',
            4 => 'Assurance Report'
        ],

        'D1' => [
            1 => 'Inventaris GRK',
            2 => 'Laporan verifikasi',
            3 => 'CDP response',
            4 => 'Sustainability report'
        ],
        'D2' => [
            2 => 'Data produksi',
            1 => 'Inventaris GRK',
            3 => 'Laporan operasional kebun'
        ],
        'D4' => [
            1 => 'CAPEX adaptasi',
            2 => 'Rencana investasi',
            3 => 'Laporan proyek adaptasi'
        ],
        'D5' => [
            1 => 'Program irigasi',
            2 => 'Konservasi tanah',
            3 => 'Varietas tahan iklim',
            4 => 'Laporan agronomi',
        ],

        'E1' => [
            1 => 'Data petani plasma',
            2 => 'Audit pemasok',
            3 => 'Sertifikasi RSPO/ISPO'
        ],
        'E2' => [
            1 => 'Kontrak kemitraan',
            2 => 'Program replanting',
            3 => 'Laporan dampak sosial'
        ],
        'E3' => [
            1 => 'Kebijakan SDM',
            2 => 'Program pekerja terdampak',
            3 => 'Laporan sosial'
        ],
        'E4' => [
            1 => 'Program CSR',
            2 => 'Laporan dampak sosial',
            3 => 'MoU kemitraan'
        ],
        'E5' => [
            1 => 'Sistem pengaduan',
            2 => 'Laporan keluhan',
            3 => 'Portal publik'
        ],

        ];

        foreach ($evidences as $indicatorCode => $items) {
            $indicator = Agriculture::where('indicator_id', $indicatorCode)->first();

            if (!$indicator) {
                continue;
            }

            foreach ($items as $value => $description) {
                AgricultureEvidence::create([
                    'agriculture_id' => $indicator->id,
                    'value' => $value,
                    'description' => $description,
                ]);
            }
        }
    }
}
