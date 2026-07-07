<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InterpretationResult;

class InterpretationResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // infrastruktur 
        InterpretationResult::create([
            'sector' => 'Infrastructure',
            'category' => 'Non-Resilient',
            'score_min' => '0',
            'score_max' => '20',
            'description' => 'Aset dan layanan perusahaan sangat rentan terhadap risiko fisik iklim, sementara sistem adaptasi dan investasi infrastruktur tahan iklim belum memadai.'
        ]);
        InterpretationResult::create([
            'sector' => 'Infrastructure',
            'category' => 'Basic Reactive',
            'score_min' => '21',
            'score_max' => '40',
            'description' => 'Perusahaan memiliki langkah mitigasi risiko fisik terbatas, tetapi masih bersifat reaktif terhadap kejadian ekstrem dan belum terintegrasi dalam desain aset.'
        ]);
        InterpretationResult::create([
            'sector' => 'Infrastructure',
            'category' => 'Emerging Resilient',
            'score_min' => '41',
            'score_max' => '60',
            'description' => 'Risiko fisik aset telah diidentifikasi dan sebagian investasi adaptasi dilakukan, namun belum menjadi standar dalam seluruh aset dan layanan.'
        ]);
        InterpretationResult::create([
            'sector' => 'Infrastructure',
            'category' => 'Integrated Resilient',
            'score_min' => '61',
            'score_max' => '80',
            'description' => 'Perusahaan memiliki sistem manajemen risiko fisik, investasi infrastruktur tahan iklim dan mekanisme adaptasi operasional yang terintegrasi.'
        ]);
        InterpretationResult::create([
            'sector' => 'Infrastructure',
            'category' => 'Transformative Resilient',
            'score_min' => '81',
            'score_max' => '100',
            'description' => 'Infrastruktur dirancang secara proaktif untuk menghadapi perubahan iklim jangka panjang dan menjadi model ketahanan wilayah serta layanan publik.'
        ]);

        // manufaktur
        InterpretationResult::create([
            'sector' => 'Manufacturing',
            'category' => 'Non-Resilient',
            'score_min' => '0',
            'score_max' => '20',
            'description' => 'Perusahaan belum mengelola risiko iklim, efisiensi energi, emisi, limbah dan rantai pasok secara sistematis.',
        ]);
        InterpretationResult::create([
            'sector' => 'Manufacturing',
            'category' => 'Basic Reactive',
            'score_min' => '21',
            'score_max' => '40',
            'description' => 'Pengelolaan lingkungan masih berorientasi pada kepatuhan regulasi dan belum menjadi bagian dari strategi bisnis atau dekarbonisasi industri.',
        ]);
        InterpretationResult::create([
            'sector' => 'Manufacturing',
            'category' => 'Emerging Resilient',
            'score_min' => '41',
            'score_max' => '60',
            'description' => 'Perusahaan mulai melakukan audit energi, efisiensi proses, pengelolaan emisi dan beberapa inisiatif rantai pasok hijau, tetapi cakupannya masih terbatas.',
        ]);
        InterpretationResult::create([
            'sector' => 'Manufacturing',
            'category' => 'Integrated Resilient',
            'score_min' => '61',
            'score_max' => '80',
            'description' => 'Dekarbonisasi rantai pasok, efisiensi energi, pengelolaan sumber daya dan pengurangan emisi telah menjadi bagian dari strategi operasional perusahaan.',
        ]);
        InterpretationResult::create([
            'sector' => 'Manufacturing',
            'category' => 'Transformative Resilient',
            'score_min' => '81',
            'score_max' => '100',
            'description' => 'Perusahaan menerapkan industri rendah karbon, efisiensi energi maju, circular economy dan praktik rantai pasok hijau secara menyeluruh.',
        ]);

        // agrikultur
        InterpretationResult::create([
            'sector' => 'Agriculture',
            'category' => 'Non-Resilient',
            'score_min' => '0',
            'score_max' => '20',
            'description' => 'Perusahaan belum memiliki sistem adaptasi agroklimat, pengelolaan risiko produksi, maupun program ketahanan petani dan rantai pasok yang memadai.',
        ]);
        InterpretationResult::create([
            'sector' => 'Agriculture',
            'category' => 'Basic Reactive',
            'score_min' => '21',
            'score_max' => '40',
            'description' => 'Adaptasi terhadap perubahan iklim masih sporadis, reaktif, dan lebih berfokus pada respons jangka pendek terhadap gangguan cuaca atau produksi.',
        ]);
        InterpretationResult::create([
            'sector' => 'Agriculture',
            'category' => 'Emerging Resilient',
            'score_min' => '41',
            'score_max' => '60',
            'description' => 'Perusahaan mulai menerapkan adaptasi lahan, pengelolaan air, mitigasi emisi produksi dan keterlibatan petani, namun belum konsisten di seluruh rantai pasok.',
        ]);
        InterpretationResult::create([
            'sector' => 'Agriculture',
            'category' => 'Integrated Resilient',
            'score_min' => '61',
            'score_max' => '80',
            'description' => 'Risiko agroklimat telah terintegrasi dalam perencanaan produksi, pengelolaan lahan, rantai pasok dan program pemberdayaan petani.',
        ]);
        InterpretationResult::create([
            'sector' => 'Agriculture',
            'category' => 'Transformative Resilient',
            'score_min' => '81',
            'score_max' => '100',
            'description' => 'Perusahaan memiliki sistem produksi adaptif, rendah emisi dan mampu memperkuat ketahanan ekonomi serta sosial petani dan komunitas.',
        ]);

        // keuangan
        InterpretationResult::create([
            'sector' => 'Finance',
            'category' => 'Non-Resilient',
            'score_min' => '0',
            'score_max' => '20',
            'description' => 'Bank belum mengintegrasikan risiko iklim ke dalam portofolio pembiayaan, belum menghitung financed emissions dan belum memiliki sistem climate risk management yang memadai.',
        ]);
        InterpretationResult::create([
            'sector' => 'Finance',
            'category' => 'Basic Reactive',
            'score_min' => '21',
            'score_max' => '40',
            'description' => 'Bank mulai melakukan pengungkapan ESG atau sustainable finance, tetapi risiko iklim belum menjadi bagian utama dari proses kredit, ERM dan strategi portofolio.',
        ]);
        InterpretationResult::create([
            'sector' => 'Finance',
            'category' => 'Emerging Resilient',
            'score_min' => '41',
            'score_max' => '60',
            'description' => 'Bank mulai menerapkan climate risk assessment, pengukuran financed emissions sebagian dan inisiatif pembiayaan hijau, tetapi belum diterapkan secara menyeluruh pada portofolio.',
        ]);
        InterpretationResult::create([
            'sector' => 'Finance',
            'category' => 'Integrated Resilient',
            'score_min' => '61',
            'score_max' => '80',
            'description' => 'Risiko iklim telah terintegrasi dalam ERM, credit risk management, climate stress testing, financed emissions dan strategi pembiayaan hijau/transisi.',
        ]);
        InterpretationResult::create([
            'sector' => 'Finance',
            'category' => 'Transformative Resilient',
            'score_min' => '81',
            'score_max' => '100',
            'description' => 'Bank menjadi pemimpin transition finance dengan dekarbonisasi portofolio, climate stress testing komprehensif dan strategi pembiayaan rendah karbon yang matang.',
        ]);

        // energi & pertambangan
        InterpretationResult::create([
            'sector' => 'Mining',
            'category' => 'Non-Resilient',
            'score_min' => '0',
            'score_max' => '20',
            'description' => 'Perusahaan belum memiliki sistem pengelolaan risiko iklim dan strategi transisi energi yang memadai. Ketergantungan pada aktivitas karbon tinggi masih besar tanpa rencana mitigasi dan dekarbonisasi yang jelas.',
        ]);
        InterpretationResult::create([
            'sector' => 'Mining',
            'category' => 'Basic Reactive',
            'score_min' => '21',
            'score_max' => '40',
            'description' => 'Perusahaan mulai merespons isu iklim, tetapi masih berfokus pada kepatuhan dan belum mengintegrasikan transisi energi ke dalam strategi bisnis dan investasi.',
        ]);
        InterpretationResult::create([
            'sector' => 'Mining',
            'category' => 'Emerging Resilient',
            'score_min' => '41',
            'score_max' => '60',
            'description' => 'Perusahaan telah memiliki inisiatif awal pengurangan emisi, pengelolaan risiko iklim, dan transisi energi, namun implementasinya belum konsisten dan belum sepenuhnya terukur.',
        ]);
        InterpretationResult::create([
            'sector' => 'Mining',
            'category' => 'Integrated Resilient',
            'score_min' => '61',
            'score_max' => '80',
            'description' => 'Risiko iklim, target emisi, strategi transisi energi dan keputusan investasi mulai terintegrasi dalam tata kelola serta pengelolaan bisnis perusahaan.',
        ]);
        InterpretationResult::create([
            'sector' => 'Mining',
            'category' => 'Transformative Resilient',
            'score_min' => '81',
            'score_max' => '100',
            'description' => 'Perusahaan menunjukkan kepemimpinan transisi energi melalui target berbasis sains, investasi rendah karbon dan sistem ketahanan iklim yang terintegrasi secara menyeluruh.'
        ]);
    }
}