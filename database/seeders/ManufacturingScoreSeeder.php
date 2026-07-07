<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturing;
use App\Models\ManufacturingScore;

class ManufacturingScoreSeeder extends Seeder
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
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'A3' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'A5' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],

        'B1' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'B2' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'B5' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],

        'C1' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'C2' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'C3' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'C4' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'C5' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],

        'D1' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'D4' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'D5' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],

        'E2' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'E3' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'E4' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],
        'E5' => [
            1 => 'Tidak ada pengawasan',
            2 => 'Disebut tanpa bukti',
            3 => 'Dilaporkan periodik',
            4 => 'Mengarahkan strategi',
            5 => 'Komite iklim aktif'
        ],

        ];

        foreach ($scores as $indicatorCode => $values) {
            $indicator = Manufacturing::where('indicator_id', $indicatorCode)->first();

            if (!$indicator) {
                continue;
            }

            foreach ($values as $score => $description) {
                ManufacturingScore::create([
                    'manufacturing_id' => $indicator->id,
                    'score' => $score,
                    'description' =>$description,
                ]);
            }
        }
    }
}
