<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Finance;
use App\Models\FinanceEvidence;

class FinanceEvidenceSeeder extends Seeder
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
            4 => 'Sustainability Report',
            5 => 'Lainnya',
        ],
        'A2' => [
            1 => 'Struktur organisasi',
            2 => 'Job description',
            3 => 'KPI',
            4 => 'Laporan manajemen',
            5 => 'Lainnya',
        ],
        'A3' => [
            1 => 'SK komite',
            2 => 'TOR',
            3 => 'Agenda rapat',
            4 => 'Notulen',
            5 => 'Laporan rekomendasi',
            6 => 'Lainnya',
        ],
        'A5' => [
            1 => 'Annual Report',
            2 => 'Sustainability Report',
            3 => 'TCFD/ISSB Report',
            4 => 'Assurance statement',
            5 => 'Lainnya',
        ],

        'B1' => [
            1 => 'Risk register',
            2 => 'Dokumen ERM',
            3 => 'TCFD disclosure',
            4 => 'Strategic plan',
            5 => 'Lainnya',
        ],
        'B2' => [
            1 => 'Business plan',
            2 => 'CAPEX/OPEX',
            3 => 'Scenario analysis',
            4 => 'Laporan keuangan',
            5 => 'Lainnya',
        ],
        'B3' => [
            1 => 'Climate stress testing',
            2 => 'NGFS scenario',
            3 => 'Laporan CRMS/IWST',
            4 => 'Lainnya',
        ],
        'B4' => [
            1 => 'Green finance policy',
            2 => 'TKBI alignment',
            3 => 'Transition finance policy',
            4 => 'Lainnya',
        ],
        'B5' => [
            1 => 'Sustainability Report',
            2 => 'Peta SDGs',
            3 => 'ISSB-aligned disclosure',
            4 => 'Lainnya',
        ],

        'C1' => [
            1 => 'Credit risk assessment',
            2 => 'ESG scoring',
            3 => 'Internal rating model',
            4 => 'ERM',
            5 => 'Lainnya',
        ],
        'C2' => [
            1 => 'SOP risiko iklim',
            2 => 'Manual ERM',
            3 => 'Dashboard risiko',
            4 => 'BCP',
            5 => 'Lainnya',
        ],
        'C3' => [
            1 => 'ERM Framework',
            2 => 'Risk matrix',
            3 => 'Laporan risiko ke dewan',
            4 => 'Lainnya',
        ],
        'C4' => [
            1 => 'Annual Report',
            2 => 'Sustainability Report',
            3 => 'TCFD section',
            4 => 'Assurance Report',
            5 => 'Lainnya',
        ],

        'D1' => [
            1 => 'Inventaris GRK',
            2 => 'Laporan verifikasi',
            3 => 'CDP response',
            4 => 'Sustainability Report',
            5 => 'Lainnya',
        ],
        'D3' => [
            1 => 'Laporan PCAF',
            2 => 'Data pembiayaan per sektor',
            3 => 'Sustainability Report',
            4 => 'Lainnya',
        ],
        'D4' => [
            2 => 'CAPEX adaptasi',
            1 => 'Rencana investasi',
            3 => 'Laporan proyek adaptasi',
            4 => 'Lainnya',
        ],
        'D5' => [
            1 => 'Indikator aset',
            2 => 'Laporan operasional',
            3 => 'Evaluasi dampak adaptasi',
            4 => 'Lainnya',
        ],
        'D6' => [
            1 => 'Climate exposure report',
            2 => 'Laporan risiko kredit',
            3 => 'Annual report',
            4 => 'Lainnya',
        ],

        'E2' => [
            1 => 'ESG advisory',
            2 => 'Pelatihan borrower',
            3 => 'Transition assessment',
            4 => 'Lainnya',
        ],
        'E3' => [
            1 => 'Kebijakan SDM',
            2 => 'Program pekerja terdampak',
            3 => 'Laporan sosial',
            4 => 'Lainnya',
        ],
        'E4' => [
            1 => 'Program CSR',
            2 => 'Laporan dampak sosial',
            3 => 'MoU kemitraan',
            4 => 'Lainnya',
        ],
        'E5' => [
            1 => 'Sistem pengaduan',
            2 => 'Laporan keluhan',
            3 => 'Portal publik',
            4 => 'Lainnya',
        ],
        
        ];

        foreach ($evidences as $indicatorCode => $items) {
            $indicator = Finance::where(
                'indicator_id', $indicatorCode
            )->first();

            if (!$indicator) {
                continue;
            }

            foreach ($items as $value => $description) {
                FinanceEvidence::create([
                    'finance_id' => $indicator->id,
                    'value' => $value,
                    'description' => $description,
                ]);
            }
        }
    }
}
