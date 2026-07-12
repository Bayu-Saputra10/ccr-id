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
            5 => 'Laporan rekomendasi'
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
            4 => 'Strategic plan',
        ],
        'B2' => [
            1 => 'Business plan',
            2 => 'CAPEX/OPEX',
            3 => 'Scenario analysis',
            4 => 'Laporan keuangan',
        ],
        'B3' => [
            1 => 'Climate risk mapping',
            2 => 'Peta banjir/panas',
            3 => 'Studi kelayakan proyek'
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
            3 => 'Dashboard risiko',
            4 => 'BCP'
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
            4 => 'Sustainability Report',
        ],
        'D2' => [
            1 => 'Data operasional transport/utilitas',
            2 => 'Inventaris emisi'
        ],
        'D4' => [
            1 => 'Data kinerja',
            2 => 'Inventaris emisi',
            3 => 'CAPEX',
            4 => 'Laporan verifikasi'
        ],
        'D5' => [
            1 => 'SOP darurat',
            2 => 'Sistem cadangan energi',
            3 => 'Laporan kesiapsiagaan'
        ],
        'D6' => [
            1 => 'CAPEX adaptasi',
            2 => 'Dokumen proyek resilien',
            3 => 'Standar desain'
        ],

        'E3' => [
            1 => 'Kebijakan SDM',
            2 => 'Program pekerja terdampak',
            3 => 'Laporan sosial'
        ],
        'E4' => [
            1 => 'Laporan CSR',
            2 => 'Laporan dampak sosial',
            3 => 'MoU kemitraan'
        ],
        'E5' => [
            1 => 'Sistem pengaduan',
            2 => 'Laporan keluhan',
            3 => 'Portal publik'
        ],
        'E6' => [
            1 => 'MoU pemerintah daerah',
            2 => 'Program ketahanan wilayah',
            3 => 'Laporan dampak'
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
