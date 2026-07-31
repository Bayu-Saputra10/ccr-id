<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GradeInterpretation;

class GradeInterpretationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         GradeInterpretation::create([
            'grade' => 'AAA',
            'category' => 'Transformative Resilient',

            'interpretation_id' =>
                'Ketahanan iklim sangat unggul dan menjadi benchmark sektor.',

            'interpretation_en' =>
                'Climate resilience is outstanding and serves as a benchmark for the sector.',
        ]);

        GradeInterpretation::create([
            'grade' => 'AA',
            'category' => 'Transformative Resilient',

            'interpretation_id' =>
                'Ketahanan iklim sangat kuat dengan kapasitas transformasi tinggi.',

            'interpretation_en' =>
                'Climate resilience is very strong with a high capacity for transformation.',
        ]);

        GradeInterpretation::create([
            'grade' => 'A',
            'category' => 'Integrated Resilient',

            'interpretation_id' =>
                'Ketahanan iklim kuat dan terintegrasi.',

            'interpretation_en' =>
                'Climate resilience is strong and well integrated into the organization.',
        ]);

        GradeInterpretation::create([
            'grade' => 'BBB',
            'category' => 'Integrated Resilient',

            'interpretation_id' =>
                'Ketahanan iklim memadai namun masih memerlukan penguatan.',

            'interpretation_en' =>
                'Climate resilience is adequate but still requires further strengthening.',
        ]);

        GradeInterpretation::create([
            'grade' => 'BB',
            'category' => 'Emerging Resilient',

            'interpretation_id' =>
                'Ketahanan iklim berkembang dengan beberapa kelemahan penting.',

            'interpretation_en' =>
                'Climate resilience is developing, although several important weaknesses remain.',
        ]);

        GradeInterpretation::create([
            'grade' => 'B',
            'category' => 'Emerging Resilient',

            'interpretation_id' =>
                'Ketahanan iklim dasar dan belum terintegrasi penuh.',

            'interpretation_en' =>
                'Climate resilience is at a basic level and has not yet been fully integrated.',
        ]);

        GradeInterpretation::create([
            'grade' => 'CCC',
            'category' => 'Basic Reactive',

            'interpretation_id' =>
                'Respons iklim masih reaktif dan berisiko tinggi.',

            'interpretation_en' =>
                'Climate responses remain largely reactive and the organization faces high climate-related risks.',
        ]);

        GradeInterpretation::create([
            'grade' => 'CC',
            'category' => 'Basic Reactive',

            'interpretation_id' =>
                'Sistem ketahanan iklim sangat terbatas.',

            'interpretation_en' =>
                'The organization has only very limited climate resilience capabilities.',
        ]);

        GradeInterpretation::create([
            'grade' => 'C',
            'category' => 'Non-Resilient',

            'interpretation_id' =>
                'Tidak memiliki kapasitas ketahanan iklim yang memadai.',

            'interpretation_en' =>
                'The organization does not yet have adequate climate resilience capabilities.',
        ]);
    }
}
