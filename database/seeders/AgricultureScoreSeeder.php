<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agriculture;
use App\Models\AgricultureScore;

class AgricultureScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scores = [

        'A1' => [
            1 => 'Tidak ada bukti formal pengawasan dewan atas isu iklim.',
            2 => 'Isu iklim hanya disebut secara umum tanpa bukti aktivitas dewan.',
            3 => 'Dewan menerima laporan risiko iklim secara periodik.',
            4 => 'Dewan memberi arahan atas strategi, target, atau keputusan iklim.',
            5 => 'Dewan/komite aktif mengawasi isu iklim dengan agenda, keputusan, dan tindak lanjut terdokumentasi.'
        ],
        'A2' => [
            1 => 'Tidak ada peran formal manajemen senior.',
            2 => 'Ada unit ESG/lingkungan tetapi belum strategis.',
            3 => 'Tanggung jawab iklim dipegang fungsi tertentu seperti CSO/CFO/ESG unit.',
            4 => 'Tanggung jawab iklim melekat pada struktur eksekutif dan KPI manajemen.',
            5 => 'Manajemen senior bertanggung jawab langsung kepada dewan atas strategi dan kinerja iklim.'
        ],
        'A3' => [
            1 => 'Tidak ada komite keberlanjutan/iklim.',
            2 => 'Komite ada tetapi pasif atau tidak memiliki agenda jelas.',
            3 => 'Komite rapat minimal tahunan dan membahas isu iklim.',
            4 => 'Komite memberi rekomendasi berkala kepada dewan/manajemen.',
            5 => 'Komite lintas fungsi aktif dengan output, target dan hasil terukur.'
        ],
        'A5' => [
            1 => 'Tidak ada pengungkapan tata kelola iklim.',
            2 => 'Hanya disebut singkat dalam laporan keberlanjutan.',
            3 => 'Diungkap dalam annual report/sustainability report dengan struktur dasar.',
            4 => 'Mengikuti struktur TCFD/ISSB untuk governance.',
            5 => 'Pengungkapan lengkap dan mendapat assurance/pemeriksaan independen.'
        ],

        'B1' => [
            1 => 'Tidak dilakukan identifikasi risiko dan peluang iklim.',
            2 => 'Identifikasi masih kualitatif umum/ad-hoc.',
            3 => 'Risiko iklim masuk dalam risk register atau ERM.',
            4 => 'Risiko/peluang dikuantifikasi dan menjadi input strategi.',
            5 => 'Risiko dan peluang diikuti rencana mitigasi, adaptasi dan peluang bisnis.'
        ],
        'B2' => [
            1 => 'Tidak ada analisis dampak iklim.',
            2 => 'Analisis kualitatif sederhana tanpa implikasi finansial.',
            3 => 'Ada analisis finansial terbatas pada biaya, aset atau operasi.',
            4 => 'Dampak digunakan dalam CAPEX/OPEX planning atau strategi bisnis.',
            5 => 'Dampak kuantitatif terhadap pendapatan, biaya, aset dan model bisnis.'
        ],
        'B3' => [
            1 => 'Tidak ada analisis.',
            2 => 'Berdasarkan pengalaman lokal.',
            3 => 'Model iklim sederhana.',
            4 => 'Menggunakan data IPCC/FAO/BMKG.',
            5 => 'Terhubung dengan model produksi dan proyeksi ekonomi.'
        ],
        'B5' => [
            1 => 'Tidak ada keterkaitan SDGs/ISSB.',
            2 => 'Ada pemetaan umum tanpa indikator terukur.',
            3 => 'SDG 13 atau isu iklim dimasukkan dalam laporan.',
            4 => 'Disclosure mulai selaras ISSB/TCFD dengan indikator kinerja.',
            5 => 'Terdapat impact indicators yang terukur dan selaras ISSB/SDGs.'
        ],

        'C1' => [
            1 => 'Tidak ada identifikasi risiko fisik/transisi.',
            2 => 'Identifikasi ad-hoc tanpa data pendukung.',
            3 => 'Identifikasi berbasis lokasi, aset atau unit bisnis.',
            4 => 'Menggunakan data ilmiah/regulator seperti IPCC, BMKG, BNPB.',
            5 => 'Risiko dikaitkan dengan nilai finansial dan keputusan bisnis.'
        ],
        'C2' => [
            1 => 'Tidak ada sistem mitigasi/respons risiko iklim.',
            2 => 'Ada rencana dasar tetapi belum diuji.',
            3 => 'SOP mitigasi risiko iklim tersedia.',
            4 => 'Sistem terintegrasi ke manajemen risiko korporat.',
            5 => 'Sistem digital/berbasis data dengan monitoring dan respons lintas fungsi.'
        ],
        'C3' => [
            1 => 'Tidak ada integrasi ke ERM.',
            2 => 'Integrasi masih parsial atau informal.',
            3 => 'Risiko iklim masuk laporan risiko tahunan.',
            4 => 'Risiko iklim disetujui/diawasi dewan dalam kerangka ERM.',
            5 => 'ERM diperbarui berkala dan memengaruhi alokasi modal/keputusan strategis.'
        ],
        'C4' => [
            1 => 'Tidak ada pelaporan risiko iklim.',
            2 => 'Pelaporan hanya internal dan tidak rutin.',
            3 => 'Risiko iklim dilaporkan tahunan.',
            4 => 'Ada bagian khusus TCFD/ISSB atau laporan risiko kepada dewan.',
            5 => 'Pelaporan publik lengkap dan mendapat assurance independen.'
        ],

        'D1' => [
            1 => 'Tidak ada laporan emisi GRK.',
            2 => 'Hanya Scope 1-2 atau data terbatas.',
            3 => 'Scope 1-2 lengkap dan Scope 3 sebagian tanpa verifikasi.',
            4 => 'Inventaris emisi diverifikasi eksternal.',
            5 => 'Disclosure selaras TCFD/CDP/GHG Protocol dan digunakan untuk target.'
        ],
        'D2' => [
            1 => 'Tidak dihitung.',
            2 => 'Dihitung parsial per unit produk.',
            3 => 'Tren efisiensi positif mulai terlihat.',
            4 => 'Dikaitkan dengan efisiensi input pupuk, energi, air atau lahan.',
            5 => 'Penurunan GRK >5% per tahun dan dilaporkan.'
        ],
        'D4' => [
            1 => 'Tidak ada investasi adaptasi.',
            2 => 'Investasi adaptasi sangat terbatas atau <5% belanja relevan.',
            3 => 'CAPEX adaptasi 5-10% atau ada proyek adaptasi prioritas.',
            4 => 'CAPEX adaptasi >10% dan terintegrasi dalam perencanaan aset.',
            5 => 'CAPEX adaptasi >20% disertai indikator hasil dan evaluasi tahunan.'
        ],
        'D5' => [
            1 => 'Tidak ada praktik/metrik adaptasi.',
            2 => 'Skala percobaan/ad-hoc.',
            3 => 'Implementasi terbatas pada sebagian lahan.',
            4 => 'Mayoritas lahan menerapkan adaptasi air, tanah atau varietas.',
            5 => 'Inovasi adaptasi terukur terhadap kekeringan/banjir dan berdampak pada produktivitas.'
        ],

        'E1' => [
            1 => 'Tidak ada asesmen.',
            2 => 'Hanya mitra/petani utama.',
            3 => '>50% petani/mitra terdata.',
            4 => 'Termasuk risiko sosial dan iklim.',
            5 => 'Diperbarui tahunan dengan verifikasi/audit/sertifikasi.'
        ],
        'E2' => [
            1 => 'Tidak ada program.',
            2 => 'Donasi/ad-hoc.',
            3 => 'Pelatihan terbatas.',
            4 => 'Replanting, akses modal dan pendampingan produksi.',
            5 => 'Peningkatan produktivitas dan resiliensi komunitas terukur.'
        ],
        'E3' => [
            1 => 'Tidak ada strategi just transition.',
            2 => 'Disebut secara umum tanpa program.',
            3 => 'Ada program untuk pekerja/kelompok terdampak.',
            4 => 'Program terkait SDG 8 dan SDG 13 serta kebijakan SDM.',
            5 => 'Evaluasi sosial tahunan dan integrasi penuh ke strategi transisi.'
        ],
        'E4' => [
            1 => 'Hanya CSR umum tanpa fokus ketahanan iklim.',
            2 => 'Ada proyek adaptasi lokal kecil/ad-hoc.',
            3 => 'Program multiyear untuk komunitas rentan.',
            4 => 'Dampak terukur pada air, bencana, kesehatan atau livelihood.',
            5 => 'Kemitraan publik-swasta dengan hasil terukur dan skalabilitas.'
        ],
        'E5' => [
            1 => 'Tidak ada mekanisme keluhan/partisipasi.',
            2 => 'Mekanisme ad-hoc dan tidak terdokumentasi.',
            3 => 'Sistem formal tersedia dan dapat digunakan pemangku kepentingan.',
            4 => 'Keluhan dianalisis trennya dan ditindaklanjuti.',
            5 => 'Sistem terbuka berbasis data publik dengan pelaporan kinerja.'
        ],

        ];

        foreach ($scores as $indicatorCode => $values) {
            $indicator = Agriculture::where('indicator_id', $indicatorCode)->first();

            if (!$indicator) {
                continue;
            }

            foreach ($values as $score => $description) {
                AgricultureScore::create([
                    'agriculture_id' => $indicator->id,
                    'score' => $score,
                    'description' =>$description,
                ]);
            }
        }
    }
}
