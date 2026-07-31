<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mining;
use App\Models\MiningEvidence;

class MiningEvidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evidences = [
        'A1' => [
        1 => ['id'=>'Board charter','en'=>'Board Charter'],
        2 => ['id'=>'Notulen rapat dewan','en'=>'Board meeting minutes'],
        3 => ['id'=>'Annual Report','en'=>'Annual Report'],
        4 => ['id'=>'Sustainability Report','en'=>'Sustainability Report'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'A2' => [
        1 => ['id'=>'Struktur organisasi','en'=>'Organizational structure'],
        2 => ['id'=>'Job description','en'=>'Job description'],
        3 => ['id'=>'KPI','en'=>'Key Performance Indicators (KPIs)'],
        4 => ['id'=>'Laporan manajemen','en'=>'Management report'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'A3' => [
        1 => ['id'=>'SK komite','en'=>'Committee appointment decree'],
        2 => ['id'=>'TOR','en'=>'Terms of Reference (TOR)'],
        3 => ['id'=>'Agenda rapat','en'=>'Meeting agenda'],
        4 => ['id'=>'Notulen','en'=>'Meeting minutes'],
        5 => ['id'=>'Laporan rekomendasi','en'=>'Recommendation report'],
        6 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'A4' => [
        1 => ['id'=>'Kebijakan remunerasi','en'=>'Remuneration policy'],
        2 => ['id'=>'KPI manajemen','en'=>'Management KPIs'],
        3 => ['id'=>'Laporan kompensasi','en'=>'Compensation report'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'A5' => [
        1 => ['id'=>'Annual Report','en'=>'Annual Report'],
        2 => ['id'=>'Sustainability Report','en'=>'Sustainability Report'],
        3 => ['id'=>'TCFD/ISSB report','en'=>'TCFD/ISSB Report'],
        4 => ['id'=>'Assurance statement','en'=>'Assurance statement'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

        'B1' => [
        1 => ['id'=>'Risk register','en'=>'Risk register'],
        2 => ['id'=>'Dokumen ERM','en'=>'ERM document'],
        3 => ['id'=>'TCFD disclosure','en'=>'TCFD disclosure'],
        4 => ['id'=>'Strategic plan','en'=>'Strategic plan'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'B2' => [
        1 => ['id'=>'Business plan','en'=>'Business plan'],
        2 => ['id'=>'CAPEX/OPEX','en'=>'CAPEX/OPEX'],
        3 => ['id'=>'Scenario analysis','en'=>'Scenario analysis'],
        4 => ['id'=>'Laporan keuangan','en'=>'Financial statements'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'B3' => [
        1 => ['id'=>'Laporan scenario analysis','en'=>'Scenario analysis report'],
        2 => ['id'=>'Model IEA/IPCC/NGFS','en'=>'IEA/IPCC/NGFS model'],
        3 => ['id'=>'Strategic plan','en'=>'Strategic plan'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'B4' => [
        1 => ['id'=>'Roadmap transisi','en'=>'Transition roadmap'],
        2 => ['id'=>'Target NZE','en'=>'Net Zero Emissions (NZE) targets'],
        3 => ['id'=>'Validasi SBTi','en'=>'SBTi validation'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'B5' => [
        1 => ['id'=>'Sustainability Report','en'=>'Sustainability Report'],
        2 => ['id'=>'Peta SDGs','en'=>'SDGs mapping'],
        3 => ['id'=>'ISSB-aligned disclosure','en'=>'ISSB-aligned disclosure'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

        'C1' => [
        1 => ['id'=>'Climate risk assessment','en'=>'Climate risk assessment'],
        2 => ['id'=>'Data IPCC/BMKG/BNPB','en'=>'IPCC/BMKG/BNPB data'],
        3 => ['id'=>'Peta risiko aset','en'=>'Asset risk map'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'C2' => [
        1 => ['id'=>'SOP risiko iklim','en'=>'Climate risk SOP'],
        2 => ['id'=>'Manual ERM','en'=>'ERM manual'],
        3 => ['id'=>'Dashboard risiko','en'=>'Risk dashboard'],
        4 => ['id'=>'BCP','en'=>'Business Continuity Plan (BCP)'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'C3' => [
        1 => ['id'=>'ERM Framework','en'=>'ERM Framework'],
        2 => ['id'=>'Risk matrix','en'=>'Risk matrix'],
        3 => ['id'=>'Laporan risiko ke dewan','en'=>'Board risk report'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'C4' => [
        1 => ['id'=>'Annual Report','en'=>'Annual Report'],
        2 => ['id'=>'Sustainability Report','en'=>'Sustainability Report'],
        3 => ['id'=>'TCFD section','en'=>'TCFD section'],
        4 => ['id'=>'Assurance Report','en'=>'Assurance Report'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

        'D1' => [
        1 => ['id'=>'Inventaris GRK','en'=>'GHG inventory'],
        2 => ['id'=>'CDP response','en'=>'CDP response'],
        3 => ['id'=>'Laporan verifikasi','en'=>'Verification report'],
        4 => ['id'=>'Sustainability Report','en'=>'Sustainability Report'],
        5 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'D2' => [
        1 => ['id'=>'Data produksi','en'=>'Production data'],
        2 => ['id'=>'Data emisi','en'=>'Emissions data'],
        3 => ['id'=>'Laporan teknis operasional','en'=>'Operational technical report'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'D3' => [
        1 => ['id'=>'Surat validasi SBTi','en'=>'SBTi validation letter'],
        2 => ['id'=>'Target emisi','en'=>'Emission reduction targets'],
        3 => ['id'=>'Laporan kemajuan','en'=>'Progress report'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'D4' => [
        1 => ['id'=>'CAPEX adaptasi','en'=>'Adaptation CAPEX'],
        2 => ['id'=>'Rencana investasi','en'=>'Investment plan'],
        3 => ['id'=>'Laporan proyek adaptasi','en'=>'Climate adaptation project report'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'D5' => [
        1 => ['id'=>'Indikator aset','en'=>'Asset indicators'],
        2 => ['id'=>'Laporan operasional','en'=>'Operational report'],
        3 => ['id'=>'Evaluasi dampak adaptasi','en'=>'Adaptation impact evaluation'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

        'E1' => [
        1 => ['id'=>'Supplier assessment','en'=>'Supplier assessment'],
        2 => ['id'=>'Audit pemasok','en'=>'Supplier audit'],
        3 => ['id'=>'CDP Supply Chain','en'=>'CDP Supply Chain'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'E3' => [
        1 => ['id'=>'Kebijakan SDM','en'=>'Human resources policy'],
        2 => ['id'=>'Program pekerja terdampak','en'=>'Affected workers program'],
        3 => ['id'=>'Laporan sosial','en'=>'Social report'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'E4' => [
        1 => ['id'=>'Program CSR','en'=>'CSR program'],
        2 => ['id'=>'Laporan dampak sosial','en'=>'Social impact report'],
        3 => ['id'=>'MoU kemitraan','en'=>'Partnership MoU'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],

    'E5' => [
        1 => ['id'=>'Sistem pengaduan','en'=>'Grievance mechanism'],
        2 => ['id'=>'Laporan keluhan','en'=>'Grievance report'],
        3 => ['id'=>'Portal publik','en'=>'Public portal'],
        4 => ['id'=>'Lainnya','en'=>'Others'],
    ],
        ];

        foreach ($evidences as $indicatorCode => $items) {
            $indicator = Mining::where(
                'indicator_id', $indicatorCode
            )->first();

            if (!$indicator) {
                continue;
            }

            foreach ($items as $value => $description) {
                MiningEvidence::create([
                    'mining_id' => $indicator->id,
                    'value' => $value,
                    'description_id' => $description['id'],
                    'description_en' => $description['en'],
                ]);
            }
        }
    }
}
