<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mining;
use App\Models\MiningScore;

class MiningScoreSeeder extends Seeder
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
            4 => 'Dewan memberi arahan atas strategi, target atau keputusan iklim.',
            5 => 'Dewan/komite aktif mengawasi isu iklim dengan agenda, keputusan dan tindak lanjut terdokumentasi.'
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
            4 => 'Komite rapat minimal tahunan dan membahas isu iklim.',
            5 => 'Komite lintas fungsi aktif dengan output, target dan hasil terukur.'
        ],
        'A4' => [
            1 => 'Tidak ada KPI iklim dalam insentif.',
            2 => 'KPI iklim disebut tetapi tidak memengaruhi bonus/remunerasi.',
            3 => 'Bonus terkait efisiensi energi atau kinerja lingkungan terbatas.',
            4 => 'Bonus terkait target GRK/iklim tahunan.',
            5 => 'Remunerasi eksekutif terkait SBTi/net-zero dan hasil terverifikasi.'
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
            3 => 'Risiko iklim masuk dalam risk register atau ERM',
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
            1 => 'Tidak ada analisis skenario.',
            2 => 'Analisis kualitatif dasar.',
            3 => 'Analisis memakai proyeksi IPCC/risiko transisi dasar.',
            4 => 'Menggunakan skenario IEA/NGFS untuk perencanaan.',
            5 => 'Terintegrasi penuh dalam keputusan investasi dan strategi bisnis.'
        ],
        'B4' => [
            1 => 'Tidak ada rencana transisi energi.',
            2 => 'Target umum tanpa roadmap.',
            3 => 'Roadmap terukur jangka menengah.',
            4 => 'Strategi NZE 2050 disetujui dewan.',
            5 => 'Validasi SBTi/eksternal dan monitoring tahunan.'
        ],
        'B5' => [
            1 => 'Tidak ada keterkaitan SDGs/ISSB.',
            2 => 'Ada pemetaan umum tanpa indikator terukur.',
            3 => 'SDG 13 atau isu iklim dimasukkan dalam laporan.',
            4 => 'Disclosure mulai selaras ISSB/TCFD dengan indikator kinerja.',
            5 => 'Terdapat impact indicators yang terukur dan selaras ISSB/SDGs.'
        ],

        'C1' => [
            1 => 'Tidak ada identifikasi risiko fisik/transisi',
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
            2 => 'Dihitung tanpa tren atau target.',
            3 => 'Penurunan intensitas <2% per tahun.',
            4 => 'Penurunan intensitas 2-5% per tahun.',
            5 => 'Penurunan intensitas >5% per tahun dan diverifikasi.'
        ],
        'D3' => [
            1 => 'Tidak ada target emisi.',
            2 => 'Target internal tidak diverifikasi.',
            3 => 'Target disusun sesuai pendekatan SBTi.',
            4 => 'Target diverifikasi/validated by SBTi atau standar setara.',
            5 => 'Target diterapkan dan kemajuan dilaporkan tahunan.'
        ],
        'D4' => [
            1 => 'Tidak ada investasi adaptasi.',
            2 => 'Investasi adaptasi sangat terbatas atau <5% belanja relevan.',
            3 => 'CAPEX adaptasi 5-10% atau ada proyek adaptasi prioritas.',
            4 => 'CAPEX adaptasi >10% dan terintegrasi dalam perencanaan aset.',
            5 => 'CAPEX adaptasi >20% disertai indikator hasil dan evaluasi tahunan.'
        ],
        'D5' => [
            1 => 'Tidak ada metrik adaptasi non-karbon.',
            2 => 'Metrik hanya mencakup sebagian kecil aset/operasi.',
            3 => 'Metrik mencakup mayoritas aset kritis.',
            4 => 'Metrik mencakup indikator sosial-ekologis dan operasional.',
            5 => 'Dampak adaptasi diukur, dievaluasi dan dilaporkan tahunan.'
        ],

        'E1' => [
            1 => 'Tidak ada asesmen risiko rantai pasok energi.',
            2 => 'Mencakup pemasok utama secara terbatas.',
            3 => 'Mencakup >50% rantai pasok utama.',
            4 => 'Termasuk risiko sosial dan iklim pemasok.',
            5 => 'Diperbarui tahunan dengan verifikasi/audit pemasok.'
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
            $indicator = Mining::where(
                'indicator_id', $indicatorCode
            )->first();

            if (!$indicator) {
                continue;
            }

            foreach ($values as $score => $description) {
                MiningScore::create([
                    'mining_id' => $indicator->id,
                    'score' => $score,
                    'description' => $description,
                ]);
            }
        }
    }
}
