<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Infrastructure;
use App\Models\InfrastructureScore;

class InfrastructureScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scores = [
            
        'A1' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'A2' => [
            1 => 'Tidak ada peran',
            2 => 'Disebut normatif',
            3 => 'Penugasan informal',
            4 => 'KPI Manajemen',
            5 => 'Jabatan Eksekutif Khusus'
        ],
        'A3' => [
            1 => 'Tidak ada',
            2 => 'Ad-hoc',
            3 => 'Dibentuk tapi pasif',
            4 => 'Rapat berkala',
            5 => 'Melapor ke dewan'
        ],
        'A5' => [
            1 => 'Tidak diungkap',
            2 => 'Naratif umum',
            3 => 'Struktur dasar',
            4 => 'Selaras TCFD',
            5 => 'Assurance independen'
        ],

        'B1' => [
            1 => 'Tidak diidentifikasi',
            2 => 'Kualitatif umum',
            3 => 'Masuk risk register',
            4 => 'Dinilai finansial',
            5 => 'Terintegrasi strategi'
        ],
        'B2' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'B5' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],

        'C1' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'C2' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'C3' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'C4' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],

        'D1' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'D4' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'D5' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'D6' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],

        'E3' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'E4' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'E5' => [
            1 => 'Tidak dianalisis',
            2 => 'Naratif',
            3 => 'Analisis terbatas',
            4 => 'Analisis CAPEX/OPEX',
            5 => 'Mengubah model bisnis'
        ],
        'E6' => [
            1 => 'Tidak dihitung',
            2 => 'Dihitung',
            3 => 'Turun <2%',
            4 => 'Turun 2-5%',
            5 => 'Turun >5%'
        ],

        ];

        foreach ($scores as $indicatorCode => $values) {
            $indicator = Infrastructure::where(
                'indicator_id', $indicatorCode
            )->first();

            if (!$indicator) {
                continue;
            }

            foreach ($values as $score => $description) {
                InfrastructureScore::create([
                    'infrastructure_id' => $indicator->id,
                    'score' => $score,
                    'description' => $description,
                ]);
            }
        }
    }
}
