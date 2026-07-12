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
            1 => 'Tidak ada bukti formal pengawasan dewan atas isu iklim.',
            2 => 'Isu iklim hanya disebut secara umum tanpa bukti aktivitas dewan.',
            3 => 'Dewan menerima laporan risiko iklim secara periodik.',
            4 => 'Dewan memberi arahan atas strategi, target, atau keputusan iklim.',
            5 => 'Dewan/komite aktif mengawasi isu iklim dengan agenda, keputusan, dan tindak lanjut terdokumentasi'
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
            5 => 'Komite lintas fungsi aktif dengan output, target, dan hasil terukur.'
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
            1 => 'Tidak ada analisis risiko fisik aset.',
            2 => 'Kajian internal dasar.',
            3 => 'Pemodelan regional.',
            4 => 'Analisis berbasis lokasi dan aset kritis.',
            5 => 'Model risiko spasial real-time dan digunakan untuk desain/investasi.'
        ],
        'B5' => [
            1 => 'Tidak ada keterkaitan SDGs/ISSB.',
            2 => 'Ada pemetaan umum tanpa indikator yang terukur.',
            3 => 'SDG 13 atau isu iklim dimasukkan dalam laporan.',
            4 => 'Disclosure mulai selaras ISSB/TCFD dan indikator kinerja.',
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
            1 => 'Tidak diukur.',
            2 => 'Diukur sebagian.',
            3 => 'Efisiensi meningkat.',
            4 => 'Penurunan ≥ 3% per tahun.',
            5 => 'Penurunan >= 5% per tahun dan diverifikasi.'
        ],
        'D4' => [
            1 => 'Tidak ada pengukuran kinerja/target.',
            2 => 'Pengukuran parsial.',
            3 => 'Target dan data tersedia, tetapi belum konsisten.',
            4 => 'Kinerja dimonitor dan terintegrasi ke keputusan.',
            5 => 'Target tercapai, diverifikasi dan menjadi benchmark.'
        ],
        'D5' => [
            1 => 'Tidak ada sistem adaptasi lokal.',
            2 => 'Sistem parsial pada sebagian kecil aset.',
            3 => 'Sebagian besar aset kritis memiliki sistem adaptasi.',
            4 => 'Seluruh aset vital memiliki sistem drainase, cadangan energi atau SOP adaptasi.',
            5 => 'Sistem adaptasi terintegrasi, diuji berkala dan terbukti menurunkan gangguan layanan.'
        ],
        'D6' => [
            1 => 'Tidak ada infrastruktur/proyek tahan iklim.',
            2 => 'Proyek adaptasi direncanakan terbatas.',
            3 => 'CAPEX adaptasi dialokasikan untuk aset/proyek prioritas.',
            4 => 'Standar desain infrastruktur resilien diterapkan pada aset utama.',
            5 => 'Infrastruktur tahan iklim menjadi standar menyeluruh dengan hasil terukur.'
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
        'E6' => [
            1 => 'Tidak ada kolaborasi.',
            2 => 'Kerja sama ad-hoc.',
            3 => 'Program kolaboratif tahunan.',
            4 => 'Kemitraan lintas lembaga/pemerintah.',
            5 => 'Kolaborasi multi-sektor dengan hasil ketahanan wilayah terukur.'
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
