<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ManagementRecommendation;

class ManagementRecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dimensi a
        ManagementRecommendation::create([
            'key' => 'A|Sangat Lemah',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation' => 'Prioritaskan pembentukan fondasi tata kelola iklim: tetapkan kebijakan iklim, penanggung jawab formal, mekanisme pelaporan kepada manajemen dan daftar bukti minimum untuk setiap indikator tata kelola.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Lemah',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation' => 'Perkuat struktur tata kelola iklim dengan menetapkan peran lintas fungsi, memperjelas akuntabilitas manajemen dan memastikan isu iklim mulai masuk dalam agenda rapat serta proses pengawasan.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Sedang',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation' => 'Tingkatkan integrasi tata kelola iklim ke dalam proses pengambilan keputusan melalui pelaporan berkala, koordinasi antar unit dan dokumentasi bukti implementasi yang lebih konsisten.',
            'action_focus' => 'Perkuat integrasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Baik',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation' => 'Perkuat konsistensi pelaksanaan tata kelola iklim melalui peningkatan pelaporan kepada manajemen puncak, penguatan akuntabilitas unit kerja dan perluasan pengawasan terhadap risiko serta peluang iklim.',
            'action_focus' => 'Optimalkan implementasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Sangat Baik',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation' => 'Pertahankan mekanisme tata kelola iklim yang telah kuat dan dorong integrasi lebih lanjut ke keputusan investasi, manajemen risiko, evaluasi kinerja manajemen dan praktik benchmarking eksternal.',
            'action_focus' => 'Pertahankan dan tingkatkan'
        ]);
        
        // dimensi b
        ManagementRecommendation::create([
            'key' => 'B|Sangat Lemah',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation' => 'Mulai integrasikan isu perubahan iklim ke dalam perencanaan bisnis dasar melalui identifikasi risiko utama, peluang adaptasi dan dampaknya terhadap model bisnis perusahaan.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Lemah',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation' => 'Susun arah awal strategi ketahanan iklim dengan memetakan risiko dan peluang iklim, menautkannya ke rencana bisnis, serta menetapkan langkah transisi yang realistis.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Sedang',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation' => 'Kembangkan roadmap ketahanan iklim yang lebih terstruktur, termasuk prioritas adaptasi, mitigasi, peluang bisnis rendah karbon dan keterkaitannya dengan tujuan jangka menengah perusahaan.',
            'action_focus' => 'Perkuat integrasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Baik',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation' => 'Perkuat integrasi risiko dan peluang iklim ke dalam perencanaan strategis, keputusan investasi, pengembangan produk atau layanan, serta evaluasi ketahanan model bisnis secara periodik.',
            'action_focus' => 'Optimalkan implementasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Sangat Baik',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation' => 'Fokus pada penyempurnaan strategi ketahanan iklim melalui scenario analysis, evaluasi berkala ketahanan model bisnis, inovasi rendah karbon dan integrasi strategi iklim ke portofolio investasi.',
            'action_focus' => 'Pertahankan dan tingkatkan'
        ]);

        // dimensi c
        ManagementRecommendation::create([
            'key' => 'C|Sangat Lemah',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation' => 'Bangun proses dasar identifikasi dan penilaian risiko iklim, termasuk pemetaan risiko fisik dan transisi, penetapan risk owner, serta dokumentasi awal dalam sistem manajemen risiko.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Lemah',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation' => 'Perkuat kerangka awal pengelolaan risiko iklim dengan memasukkan risiko iklim ke risk register, menetapkan parameter penilaian dan mulai melakukan pemantauan berkala.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Sedang',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation' => 'Integrasikan risiko iklim ke dalam kerangka ERM perusahaan, termasuk proses identifikasi, pengukuran, mitigasi, pemantauan dan pelaporan risiko kepada manajemen.',
            'action_focus' => 'Perkuat integrasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Baik',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation' => 'Tingkatkan kualitas identifikasi, pengukuran, dan evaluasi risiko iklim melalui indikator risiko yang lebih jelas, pembaruan berkala dan keterkaitan dengan keputusan operasional maupun investasi.',
            'action_focus' => 'Optimalkan implementasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Sangat Baik',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation' => 'Pertahankan sistem manajemen risiko iklim yang telah terintegrasi dan tingkatkan ketajaman analisis melalui stress testing, scenario analysis, early warning indicators dan review independen.',
            'action_focus' => 'Pertahankan dan tingkatkan'
        ]);

        // dimensi d
        ManagementRecommendation::create([
            'key' => 'D|Sangat Lemah',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation' => 'Tetapkan baseline, indikator kinerja, dan target dasar terkait ketahanan iklim sebagai fondasi pengukuran, pemantauan dan pelaporan kemajuan perusahaan.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Lemah',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation' => 'Kembangkan target iklim awal yang lebih jelas, lengkapi dengan baseline data, unit penanggung jawab, jadwal pemantauan dan mekanisme dokumentasi capaian.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Sedang',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation' => 'Perkuat target ketahanan iklim dengan indikator yang lebih terukur, mekanisme monitoring yang konsisten, serta evaluasi berkala terhadap capaian dan gap implementasi.',
            'action_focus' => 'Perkuat integrasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Baik',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation' => 'Perkuat monitoring dan evaluasi capaian target melalui KPI yang terdokumentasi, data yang lebih konsisten dan keterkaitan hasil kinerja dengan proses pengambilan keputusan.',
            'action_focus' => 'Optimalkan implementasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Sangat Baik',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation' => 'Pertahankan sistem pengukuran kinerja yang telah berjalan dan tingkatkan transparansi pelaporan, verifikasi data, evaluasi capaian target, serta pembelajaran berkelanjutan.',
            'action_focus' => 'Pertahankan dan tingkatkan'
        ]);

        // dimensi e
        ManagementRecommendation::create([
            'key' => 'E|Sangat Lemah',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation' => 'Mulai bangun mekanisme dasar keterlibatan pemasok, pekerja, komunitas dan pemangku kepentingan terkait risiko iklim yang memengaruhi rantai nilai dan aspek sosial.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Lemah',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation' => 'Perkuat pemetaan risiko sosial dan rantai nilai dengan mengidentifikasi pemasok, mitra, komunitas terdampak, serta potensi gangguan iklim terhadap operasi dan layanan.',
            'action_focus' => 'Bangun fondasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Sedang',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation' => 'Perluas identifikasi risiko dan ketergantungan rantai nilai terhadap perubahan iklim, serta mulai integrasikan hasilnya ke dalam pengelolaan pemasok dan hubungan pemangku kepentingan.',
            'action_focus' => 'Perkuat integrasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Baik',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation' => 'Tingkatkan integrasi ketahanan iklim ke dalam pengelolaan pemasok, pekerja, komunitas, dan pemangku kepentingan melalui standar, evaluasi, pelatihan dan mekanisme umpan balik.',
            'action_focus' => 'Optimalkan implementasi'
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Sangat Baik',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation' => 'Pertahankan keterlibatan pemangku kepentingan dan pemasok dalam strategi ketahanan iklim, serta dorong kolaborasi, inovasi dan pembelajaran bersama di sepanjang rantai nilai.',
            'action_focus' => 'Pertahankan dan tingkatkan'
        ]);
    }
}
