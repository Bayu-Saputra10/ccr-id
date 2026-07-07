<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DimensionInterpretation;

class DimensionInterpretationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dimensi a
        DimensionInterpretation::create([
            'key' => 'A|Sangat Lemah',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan',
            'score_min' => 0,
            'score_max' => 1,
            'category' => 'Sangat Lemah',
            'automatic_interpretation' => 'Tata kelola dan kepemimpinan iklim belum terbentuk secara memadai. Perusahaan belum menunjukkan struktur, kebijakan, atau mekanisme pengawasan yang cukup untuk mengarahkan agenda ketahanan iklim.',
            'short_recommendation' => 'Bangun struktur tata kelola iklim dasar, tetapkan penanggung jawab, dan mulai dokumentasikan kebijakan iklim.'
        ]);
        DimensionInterpretation::create([
            'key' => 'A|Lemah',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan',
            'score_min' => 1.01,
            'score_max' => 2,
            'category' => 'Lemah',
            'automatic_interpretation' => 'Tata kelola iklim mulai dikenali, tetapi masih terbatas pada komitmen awal dan belum didukung peran, tanggung jawab, serta bukti pengawasan yang konsisten.',
            'short_recommendation' => 'Perjelas peran manajemen, mekanisme pengawasan dan bukti pelaksanaan tata kelola iklim.'
        ]);
        DimensionInterpretation::create([
            'key' => 'A|Sedang',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan',
            'score_min' => 2.01,
            'score_max' => 3,
            'category' => 'Sedang',
            'automatic_interpretation' => 'Tata kelola iklim telah mulai dikembangkan, namun penerapannya masih parsial. Perusahaan perlu memperjelas akuntabilitas, peran manajemen dan mekanisme pemantauan isu iklim.',
            'short_recommendation' => 'Integrasikan tata kelola iklim ke rapat manajemen, pelaporan berkala dan proses pengambilan keputusan.'
        ]);
        DimensionInterpretation::create([
            'key' => 'A|Baik',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan',
            'score_min' => 3.01,
            'score_max' => 4,
            'category' => 'Baik',
            'automatic_interpretation' => 'Tata kelola dan kepemimpinan iklim sudah berjalan cukup kuat. Penguatan masih diperlukan pada konsistensi bukti, keterlibatan lintas fungsi dan integrasi keputusan iklim ke proses manajemen utama.',
            'short_recommendation' => 'Perkuat konsistensi bukti, koordinasi lintas fungsi dan keterkaitan tata kelola iklim dengan strategi perusahaan.'
        ]);
        DimensionInterpretation::create([
            'key' => 'A|Sangat Baik',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan',
            'score_min' => 4.01,
            'score_max' => 5,
            'category' => 'Sangat Baik',
            'automatic_interpretation' => 'Tata kelola dan kepemimpinan iklim telah menunjukkan kualitas sangat baik. Struktur pengawasan, komitmen manajemen dan mekanisme pengambilan keputusan terkait iklim telah terbangun kuat dan terdokumentasi.',
            'short_recommendation' => 'Pertahankan praktik tata kelola yang kuat dan gunakan hasil penilaian untuk peningkatan berkelanjutan.'
        ]);
        
        // dimensi b
        DimensionInterpretation::create([
            'key' => 'B|Sangat Lemah',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'score_min' => 0,
            'score_max' => 1,
            'category' => 'Sangat Lemah',
            'automatic_interpretation' => 'Strategi bisnis belum menunjukkan keterkaitan yang jelas dengan risiko dan peluang perubahan iklim. Ketahanan iklim belum menjadi bagian dari arah pengembangan model bisnis.',
            'short_recommendation' => 'Mulai petakan dampak risiko dan peluang iklim terhadap model bisnis dan rencana strategis.'
        ]);
        DimensionInterpretation::create([
            'key' => 'B|Lemah',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'score_min' => 1.01,
            'score_max' => 2,
            'category' => 'Lemah',
            'automatic_interpretation' => 'Pertimbangan iklim mulai muncul dalam strategi perusahaan, tetapi masih bersifat umum dan belum terhubung dengan rencana bisnis, investasi, atau penyesuaian model bisnis.',
            'short_recommendation' => 'Hubungkan isu iklim dengan prioritas bisnis, investasi dan rencana adaptasi awal.'
        ]);
        DimensionInterpretation::create([
            'key' => 'B|Sedang',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'score_min' => 2.01,
            'score_max' => 3,
            'category' => 'Sedang',
            'automatic_interpretation' => 'Strategi ketahanan iklim telah mulai dikembangkan, namun integrasinya ke model bisnis masih terbatas. Perusahaan perlu memperkuat hubungan antara risiko iklim, peluang pasar dan keputusan strategis.',
            'short_recommendation' => 'Perkuat roadmap strategi iklim, skenario bisnis dan rencana penyesuaian model bisnis.'
        ]);
        DimensionInterpretation::create([
            'key' => 'B|Baik',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'score_min' => 3.01,
            'score_max' => 4,
            'category' => 'Baik',
            'automatic_interpretation' => 'Strategi dan resiliensi model bisnis sudah cukup kuat. Perusahaan telah mulai mengaitkan isu iklim dengan arah bisnis, tetapi masih perlu memperkuat skenario, prioritas investasi dan roadmap implementasi.',
            'short_recommendation' => 'Perdalam penggunaan skenario, prioritas investasi dan indikator implementasi strategi iklim.'
        ]);
        DimensionInterpretation::create([
            'key' => 'B|Sangat Baik',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'score_min' => 4.01,
            'score_max' => 5,
            'category' => 'Sangat Baik',
            'automatic_interpretation' => 'Perusahaan menunjukkan integrasi strategi iklim yang sangat baik ke dalam model bisnis. Risiko dan peluang iklim telah dipertimbangkan dalam arah strategis, transformasi bisnis dan prioritas pengembangan jangka panjang.',
            'short_recommendation' => 'Pertahankan integrasi strategi iklim dan gunakan sebagai dasar inovasi serta transformasi bisnis.'
        ]);

        // dimensi c
        DimensionInterpretation::create([
            'key' => 'C|Sangat Lemah',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'score_min' => 0,
            'score_max' => 1,
            'category' => 'Sangat Lemah',
            'automatic_interpretation' => 'Manajemen risiko iklim belum terbentuk. Risiko fisik maupun transisi belum diidentifikasi secara memadai dan belum masuk dalam sistem manajemen risiko perusahaan.',
            'short_recommendation' => 'Mulai identifikasi risiko fisik dan transisi serta masukkan ke daftar risiko utama perusahaan.'
        ]);
        DimensionInterpretation::create([
            'key' => 'C|Lemah',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'score_min' => 1.01,
            'score_max' => 2,
            'category' => 'Lemah',
            'automatic_interpretation' => 'Risiko iklim mulai dikenali, tetapi proses identifikasi, penilaian dan mitigasinya masih terbatas. Pengelolaan risiko belum terintegrasi dengan kerangka manajemen risiko utama.',
            'short_recommendation' => 'Bangun proses penilaian risiko iklim dan tetapkan rencana mitigasi awal.'
        ]);
        DimensionInterpretation::create([
            'key' => 'C|Sedang',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'score_min' => 2.01,
            'score_max' => 3,
            'category' => 'Sedang',
            'automatic_interpretation' => 'Manajemen risiko iklim telah mulai berjalan, namun masih memerlukan penguatan pada metodologi penilaian, dokumentasi bukti dan integrasi dengan enterprise risk management.',
            'short_recommendation' => 'Integrasikan risiko iklim ke ERM, monitoring dan pelaporan risiko perusahaan.'
        ]);
        DimensionInterpretation::create([
            'key' => 'C|Baik',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'score_min' => 3.01,
            'score_max' => 4,
            'category' => 'Baik',
            'automatic_interpretation' => 'Manajemen risiko iklim sudah cukup kuat dan mulai terintegrasi dalam sistem risiko perusahaan. Penguatan masih diperlukan pada pemantauan berkala, pengukuran dampak dan tindak lanjut mitigasi.',
            'short_recommendation' => 'Perkuat pengukuran dampak, stress testing dan evaluasi tindak lanjut mitigasi.'
        ]);
        DimensionInterpretation::create([
            'key' => 'C|Sangat Baik',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'score_min' => 4.01,
            'score_max' => 5,
            'category' => 'Sangat Baik',
            'automatic_interpretation' => 'Sistem manajemen risiko iklim telah berjalan sangat baik. Risiko fisik dan transisi telah diidentifikasi, dinilai, dipantau dan diintegrasikan ke dalam proses manajemen risiko perusahaan.',
            'short_recommendation' => 'Pertahankan sistem risiko terintegrasi dan tingkatkan kualitas analisis skenario serta pemantauan.'
        ]);

        // dimensi d
        DimensionInterpretation::create([
            'key' => 'D|Sangat Lemah',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'score_min' => 0,
            'score_max' => 1,
            'category' => 'Sangat Lemah',
            'automatic_interpretation' => 'Kinerja dan target ketahanan iklim belum tersedia secara memadai. Perusahaan belum memiliki indikator, baseline, atau target terukur yang dapat digunakan untuk memantau kemajuan.',
            'short_recommendation' => 'Tetapkan baseline, indikator kinerja dan target awal terkait ketahanan iklim.'
        ]);
        DimensionInterpretation::create([
            'key' => 'D|Lemah',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'score_min' => 1.01,
            'score_max' => 2,
            'category' => 'Lemah',
            'automatic_interpretation' => 'Target dan indikator kinerja iklim mulai tersedia, tetapi masih terbatas, belum konsisten dan belum cukup kuat untuk menilai capaian ketahanan iklim secara berkala.',
            'short_recommendation' => 'Perkuat kelengkapan KPI, metode pengukuran dan dokumentasi capaian.'
        ]);
        DimensionInterpretation::create([
            'key' => 'D|Sedang',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'score_min' => 2.01,
            'score_max' => 3,
            'category' => 'Sedang',
            'automatic_interpretation' => 'Kinerja dan target iklim telah mulai dikembangkan, namun masih memerlukan penguatan pada baseline, ukuran capaian, konsistensi pemantauan dan pelaporan hasil.',
            'short_recommendation' => 'Bangun sistem monitoring berkala, validasi data dan pelaporan target iklim.'
        ]);
        DimensionInterpretation::create([
            'key' => 'D|Baik',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'score_min' => 3.01,
            'score_max' => 4,
            'category' => 'Baik',
            'automatic_interpretation' => 'Kinerja dan target terukur sudah cukup kuat. Perusahaan telah memiliki indikator dan target, tetapi masih perlu memperkuat validasi data, konsistensi monitoring dan keterkaitan dengan keputusan manajerial.',
            'short_recommendation' => 'Perkuat validasi data, konsistensi evaluasi dan keterkaitan target dengan keputusan manajemen.'
        ]);
        DimensionInterpretation::create([
            'key' => 'D|Sangat Baik',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'score_min' => 4.01,
            'score_max' => 5,
            'category' => 'Sangat Baik',
            'automatic_interpretation' => 'Perusahaan menunjukkan kinerja dan target ketahanan iklim yang sangat baik. Indikator, baseline, target, pemantauan dan pelaporan capaian telah tersedia dan digunakan secara konsisten.',
            'short_recommendation' => 'Pertahankan kualitas pengukuran dan gunakan capaian target sebagai dasar peningkatan kinerja.'
        ]);

        // dimensi e
        DimensionInterpretation::create([
            'key' => 'E|Sangat Lemah',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'score_min' => 0,
            'score_max' => 1,
            'category' => 'Sangat Lemah',
            'automatic_interpretation' => 'Resiliensi sosial dan rantai nilai belum menjadi bagian dari penilaian ketahanan iklim. Perusahaan belum menunjukkan bukti pelibatan pemasok, mitra, pekerja, atau komunitas dalam agenda resiliensi.',
            'short_recommendation' => 'Mulai identifikasi pemasok, mitra, pekerja dan komunitas yang relevan dengan risiko iklim.'
        ]);
        DimensionInterpretation::create([
            'key' => 'E|Lemah',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'score_min' => 1.01,
            'score_max' => 2,
            'category' => 'Lemah',
            'automatic_interpretation' => 'Aspek sosial dan rantai nilai mulai diperhatikan, tetapi masih terbatas pada inisiatif awal. Keterlibatan pemasok, mitra dan pemangku kepentingan belum berjalan secara sistematis.',
            'short_recommendation' => 'Bangun mekanisme pelibatan awal untuk pemasok, mitra dan pemangku kepentingan terdampak.'
        ]);
        DimensionInterpretation::create([
            'key' => 'E|Sedang',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'score_min' => 2.01,
            'score_max' => 3,
            'category' => 'Sedang',
            'automatic_interpretation' => 'Resiliensi sosial dan rantai nilai telah mulai dikembangkan, namun integrasinya masih parsial. Perusahaan perlu memperkuat pemetaan risiko rantai pasok, keterlibatan pemangku kepentingan dan dukungan adaptasi.',
            'short_recommendation' => 'Perkuat pemetaan risiko rantai nilai, program kolaborasi dan dukungan adaptasi sosial.'
        ]);
        DimensionInterpretation::create([
            'key' => 'E|Baik',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'score_min' => 3.01,
            'score_max' => 4,
            'category' => 'Baik',
            'automatic_interpretation' => 'Resiliensi sosial dan rantai nilai sudah cukup kuat. Penguatan masih diperlukan pada perluasan cakupan pemasok, mekanisme kolaborasi, serta konsistensi bukti dukungan terhadap komunitas dan mitra terdampak.',
            'short_recommendation' => 'Perluas cakupan pemasok dan mitra, serta dokumentasikan bukti kolaborasi ketahanan iklim.'
        ]);
        DimensionInterpretation::create([
            'key' => 'E|Sangat Baik',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'score_min' => 4.01,
            'score_max' => 5,
            'category' => 'Sangat Baik',
            'automatic_interpretation' => 'Perusahaan menunjukkan resiliensi sosial dan rantai nilai yang sangat baik. Risiko iklim pada pemasok, mitra, pekerja dan komunitas telah diperhatikan dalam strategi ketahanan iklim perusahaan.',
            'short_recommendation' => 'Pertahankan kolaborasi rantai nilai dan gunakan sebagai keunggulan resiliensi perusahaan.'
        ]);
    }
}
