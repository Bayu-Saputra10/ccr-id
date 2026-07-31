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
    1 => [
        'id' => 'Board Charter',
        'en' => 'Board Charter',
    ],
    2 => [
        'id' => 'Notulen rapat dewan',
        'en' => 'Board Meeting Minutes',
    ],
    3 => [
        'id' => 'Laporan Tahunan',
        'en' => 'Annual Report',
    ],
    4 => [
        'id' => 'Laporan Keberlanjutan',
        'en' => 'Sustainability Report',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'A2' => [
    1 => [
        'id' => 'Struktur organisasi',
        'en' => 'Organizational Structure',
    ],
    2 => [
        'id' => 'Uraian tugas',
        'en' => 'Job Description',
    ],
    3 => [
        'id' => 'KPI',
        'en' => 'Key Performance Indicators (KPIs)',
    ],
    4 => [
        'id' => 'Laporan manajemen',
        'en' => 'Management Report',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'A3' => [
    1 => [
        'id' => 'SK komite',
        'en' => 'Committee Appointment Letter',
    ],
    2 => [
        'id' => 'TOR',
        'en' => 'Terms of Reference (TOR)',
    ],
    3 => [
        'id' => 'Agenda rapat',
        'en' => 'Meeting Agenda',
    ],
    4 => [
        'id' => 'Notulen',
        'en' => 'Meeting Minutes',
    ],
    5 => [
        'id' => 'Laporan rekomendasi',
        'en' => 'Recommendation Report',
    ],
    6 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'A5' => [
    1 => [
        'id' => 'Laporan Tahunan',
        'en' => 'Annual Report',
    ],
    2 => [
        'id' => 'Laporan Keberlanjutan',
        'en' => 'Sustainability Report',
    ],
    3 => [
        'id' => 'Laporan TCFD/ISSB',
        'en' => 'TCFD/ISSB Report',
    ],
    4 => [
        'id' => 'Pernyataan Assurance',
        'en' => 'Assurance Statement',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

        'B1' => [
    1 => [
        'id' => 'Risk Register',
        'en' => 'Risk Register',
    ],
    2 => [
        'id' => 'Dokumen ERM',
        'en' => 'ERM Document',
    ],
    3 => [
        'id' => 'Pengungkapan TCFD',
        'en' => 'TCFD Disclosure',
    ],
    4 => [
        'id' => 'Rencana Strategis',
        'en' => 'Strategic Plan',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'B2' => [
    1 => [
        'id' => 'Rencana Bisnis',
        'en' => 'Business Plan',
    ],
    2 => [
        'id' => 'CAPEX/OPEX',
        'en' => 'CAPEX/OPEX',
    ],
    3 => [
        'id' => 'Analisis Skenario',
        'en' => 'Scenario Analysis',
    ],
    4 => [
        'id' => 'Laporan Keuangan',
        'en' => 'Financial Statements',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'B3' => [
    1 => [
        'id' => 'Pemetaan Risiko Iklim',
        'en' => 'Climate Risk Mapping',
    ],
    2 => [
        'id' => 'Peta banjir/panas',
        'en' => 'Flood/Heat Risk Map',
    ],
    3 => [
        'id' => 'Studi Kelayakan Proyek',
        'en' => 'Project Feasibility Study',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'B5' => [
    1 => [
        'id' => 'Laporan Keberlanjutan',
        'en' => 'Sustainability Report',
    ],
    2 => [
        'id' => 'Peta SDGs',
        'en' => 'SDGs Mapping',
    ],
    3 => [
        'id' => 'Pengungkapan selaras ISSB',
        'en' => 'ISSB-aligned Disclosure',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

        'C1' => [
    1 => [
        'id' => 'Penilaian risiko iklim',
        'en' => 'Climate Risk Assessment',
    ],
    2 => [
        'id' => 'Data IPCC/BMKG/BNPB',
        'en' => 'IPCC/BMKG/BNPB Data',
    ],
    3 => [
        'id' => 'Peta risiko aset',
        'en' => 'Asset Risk Map',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'C2' => [
    1 => [
        'id' => 'SOP risiko iklim',
        'en' => 'Climate Risk SOP',
    ],
    2 => [
        'id' => 'Manual ERM',
        'en' => 'ERM Manual',
    ],
    3 => [
        'id' => 'Dashboard risiko',
        'en' => 'Risk Dashboard',
    ],
    4 => [
        'id' => 'BCP',
        'en' => 'Business Continuity Plan (BCP)',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'C3' => [
    1 => [
        'id' => 'Framework ERM',
        'en' => 'ERM Framework',
    ],
    2 => [
        'id' => 'Matriks risiko',
        'en' => 'Risk Matrix',
    ],
    3 => [
        'id' => 'Laporan risiko ke dewan',
        'en' => 'Risk Report to the Board',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'C4' => [
    1 => [
        'id' => 'Laporan Tahunan',
        'en' => 'Annual Report',
    ],
    2 => [
        'id' => 'Laporan Keberlanjutan',
        'en' => 'Sustainability Report',
    ],
    3 => [
        'id' => 'Bagian TCFD',
        'en' => 'TCFD Section',
    ],
    4 => [
        'id' => 'Laporan Assurance',
        'en' => 'Assurance Report',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

        'D1' => [
    1 => [
        'id' => 'Inventaris GRK',
        'en' => 'GHG Inventory',
    ],
    2 => [
        'id' => 'Laporan verifikasi',
        'en' => 'Verification Report',
    ],
    3 => [
        'id' => 'Respons CDP',
        'en' => 'CDP Response',
    ],
    4 => [
        'id' => 'Laporan Keberlanjutan',
        'en' => 'Sustainability Report',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'D2' => [
    1 => [
        'id' => 'Data operasional transportasi/utilitas',
        'en' => 'Transportation/Utility Operational Data',
    ],
    2 => [
        'id' => 'Inventaris emisi',
        'en' => 'Emission Inventory',
    ],
    3 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'D4' => [
    1 => [
        'id' => 'Data kinerja',
        'en' => 'Performance Data',
    ],
    2 => [
        'id' => 'Inventaris emisi',
        'en' => 'Emission Inventory',
    ],
    3 => [
        'id' => 'CAPEX',
        'en' => 'CAPEX',
    ],
    4 => [
        'id' => 'Laporan verifikasi',
        'en' => 'Verification Report',
    ],
    5 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'D5' => [
    1 => [
        'id' => 'SOP darurat',
        'en' => 'Emergency SOP',
    ],
    2 => [
        'id' => 'Sistem cadangan energi',
        'en' => 'Backup Energy System',
    ],
    3 => [
        'id' => 'Laporan kesiapsiagaan',
        'en' => 'Preparedness Report',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'D6' => [
    1 => [
        'id' => 'CAPEX adaptasi',
        'en' => 'Adaptation CAPEX',
    ],
    2 => [
        'id' => 'Dokumen proyek resilien',
        'en' => 'Resilient Infrastructure Project Document',
    ],
    3 => [
        'id' => 'Standar desain',
        'en' => 'Design Standards',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

        'E3' => [
    1 => [
        'id' => 'Kebijakan SDM',
        'en' => 'Human Resources Policy',
    ],
    2 => [
        'id' => 'Program pekerja terdampak',
        'en' => 'Affected Worker Support Program',
    ],
    3 => [
        'id' => 'Laporan sosial',
        'en' => 'Social Impact Report',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'E4' => [
    1 => [
        'id' => 'Laporan CSR',
        'en' => 'CSR Report',
    ],
    2 => [
        'id' => 'Laporan dampak sosial',
        'en' => 'Social Impact Report',
    ],
    3 => [
        'id' => 'MoU kemitraan',
        'en' => 'Partnership MoU',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'E5' => [
    1 => [
        'id' => 'Sistem pengaduan',
        'en' => 'Grievance Mechanism',
    ],
    2 => [
        'id' => 'Laporan keluhan',
        'en' => 'Grievance Report',
    ],
    3 => [
        'id' => 'Portal publik',
        'en' => 'Public Portal',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
],

'E6' => [
    1 => [
        'id' => 'MoU pemerintah daerah',
        'en' => 'Local Government MoU',
    ],
    2 => [
        'id' => 'Program ketahanan wilayah',
        'en' => 'Regional Resilience Program',
    ],
    3 => [
        'id' => 'Laporan dampak',
        'en' => 'Impact Report',
    ],
    4 => [
        'id' => 'Lainnya',
        'en' => 'Others',
    ],
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
        'description_id' => $description['id'],
        'description_en' => $description['en'],
    ]);
}
        }
    }
}