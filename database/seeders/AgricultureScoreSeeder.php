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
    1 => [
        'id' => 'Tidak ada bukti formal pengawasan dewan atas isu iklim.',
        'en' => 'There is no formal evidence of board oversight of climate-related issues.',
    ],
    2 => [
        'id' => 'Isu iklim hanya disebut secara umum tanpa bukti aktivitas dewan.',
        'en' => 'Climate issues are mentioned only in general terms without evidence of board involvement.',
    ],
    3 => [
        'id' => 'Dewan menerima laporan risiko iklim secara periodik.',
        'en' => 'The board receives periodic climate risk reports.',
    ],
    4 => [
        'id' => 'Dewan memberi arahan atas strategi, target, atau keputusan iklim.',
        'en' => 'The board provides direction on climate strategy, targets, or decisions.',
    ],
    5 => [
        'id' => 'Dewan/komite aktif mengawasi isu iklim dengan agenda, keputusan, dan tindak lanjut terdokumentasi.',
        'en' => 'The board or committee actively oversees climate issues through documented agendas, decisions, and follow-up actions.',
    ],
],

'A2' => [
    1 => [
        'id' => 'Tidak ada peran formal manajemen senior.',
        'en' => 'There is no formal role for senior management.',
    ],
    2 => [
        'id' => 'Ada unit ESG/lingkungan tetapi belum strategis.',
        'en' => 'An ESG or environmental unit exists but does not yet play a strategic role.',
    ],
    3 => [
        'id' => 'Tanggung jawab iklim dipegang fungsi tertentu seperti CSO/CFO/ESG unit.',
        'en' => 'Climate responsibilities are assigned to specific functions such as the CSO, CFO, or ESG unit.',
    ],
    4 => [
        'id' => 'Tanggung jawab iklim melekat pada struktur eksekutif dan KPI manajemen.',
        'en' => 'Climate responsibilities are embedded in the executive structure and management KPIs.',
    ],
    5 => [
        'id' => 'Manajemen senior bertanggung jawab langsung kepada dewan atas strategi dan kinerja iklim.',
        'en' => 'Senior management is directly accountable to the board for climate strategy and performance.',
    ],
],

'A3' => [
    1 => [
        'id' => 'Tidak ada komite keberlanjutan/iklim.',
        'en' => 'There is no sustainability or climate committee.',
    ],
    2 => [
        'id' => 'Komite ada tetapi pasif atau tidak memiliki agenda jelas.',
        'en' => 'The committee exists but is inactive or lacks a clear agenda.',
    ],
    3 => [
        'id' => 'Komite rapat minimal tahunan dan membahas isu iklim.',
        'en' => 'The committee meets at least annually and discusses climate-related issues.',
    ],
    4 => [
        'id' => 'Komite memberi rekomendasi berkala kepada dewan/manajemen.',
        'en' => 'The committee provides regular recommendations to the board and management.',
    ],
    5 => [
        'id' => 'Komite lintas fungsi aktif dengan output, target dan hasil terukur.',
        'en' => 'The cross-functional committee actively delivers measurable outputs, targets, and results.',
    ],
],

'A5' => [
    1 => [
        'id' => 'Tidak ada pengungkapan tata kelola iklim.',
        'en' => 'There is no disclosure of climate governance.',
    ],
    2 => [
        'id' => 'Hanya disebut singkat dalam laporan keberlanjutan.',
        'en' => 'Climate governance is mentioned only briefly in the sustainability report.',
    ],
    3 => [
        'id' => 'Diungkap dalam annual report/sustainability report dengan struktur dasar.',
        'en' => 'Climate governance is disclosed in the annual or sustainability report using a basic structure.',
    ],
    4 => [
        'id' => 'Mengikuti struktur TCFD/ISSB untuk governance.',
        'en' => 'The disclosure follows the TCFD/ISSB governance structure.',
    ],
    5 => [
        'id' => 'Pengungkapan lengkap dan mendapat assurance/pemeriksaan independen.',
        'en' => 'The disclosure is comprehensive and has received independent assurance.',
    ],
],

        'B1' => [
    1 => [
        'id' => 'Tidak dilakukan identifikasi risiko dan peluang iklim.',
        'en' => 'No climate-related risks and opportunities have been identified.',
    ],
    2 => [
        'id' => 'Identifikasi masih kualitatif umum/ad-hoc.',
        'en' => 'Identification is still general, qualitative, and ad hoc.',
    ],
    3 => [
        'id' => 'Risiko iklim masuk dalam risk register atau ERM.',
        'en' => 'Climate risks are included in the risk register or Enterprise Risk Management (ERM).',
    ],
    4 => [
        'id' => 'Risiko/peluang dikuantifikasi dan menjadi input strategi.',
        'en' => 'Climate-related risks and opportunities are quantified and used as strategic inputs.',
    ],
    5 => [
        'id' => 'Risiko dan peluang diikuti rencana mitigasi, adaptasi dan peluang bisnis.',
        'en' => 'Climate-related risks and opportunities are supported by mitigation, adaptation, and business opportunity plans.',
    ],
],

'B2' => [
    1 => [
        'id' => 'Tidak ada analisis dampak iklim.',
        'en' => 'No climate impact analysis has been conducted.',
    ],
    2 => [
        'id' => 'Analisis kualitatif sederhana tanpa implikasi finansial.',
        'en' => 'Only a basic qualitative analysis is available without financial implications.',
    ],
    3 => [
        'id' => 'Ada analisis finansial terbatas pada biaya, aset atau operasi.',
        'en' => 'Financial analysis is available but limited to costs, assets, or operations.',
    ],
    4 => [
        'id' => 'Dampak digunakan dalam CAPEX/OPEX planning atau strategi bisnis.',
        'en' => 'Climate impacts are incorporated into CAPEX/OPEX planning and business strategy.',
    ],
    5 => [
        'id' => 'Dampak kuantitatif terhadap pendapatan, biaya, aset dan model bisnis.',
        'en' => 'Quantitative climate impacts on revenue, costs, assets, and the business model have been assessed.',
    ],
],

'B3' => [
    1 => [
        'id' => 'Tidak ada analisis.',
        'en' => 'No scenario analysis has been conducted.',
    ],
    2 => [
        'id' => 'Berdasarkan pengalaman lokal.',
        'en' => 'The analysis is based only on local experience.',
    ],
    3 => [
        'id' => 'Model iklim sederhana.',
        'en' => 'Simple climate models are used.',
    ],
    4 => [
        'id' => 'Menggunakan data IPCC/FAO/BMKG.',
        'en' => 'The analysis uses data from IPCC, FAO, or BMKG.',
    ],
    5 => [
        'id' => 'Terhubung dengan model produksi dan proyeksi ekonomi.',
        'en' => 'The analysis is integrated with production models and economic projections.',
    ],
],

'B5' => [
    1 => [
        'id' => 'Tidak ada keterkaitan SDGs/ISSB.',
        'en' => 'There is no linkage to the SDGs or ISSB.',
    ],
    2 => [
        'id' => 'Ada pemetaan umum tanpa indikator terukur.',
        'en' => 'General mapping exists but without measurable indicators.',
    ],
    3 => [
        'id' => 'SDG 13 atau isu iklim dimasukkan dalam laporan.',
        'en' => 'SDG 13 or climate-related issues are included in company reporting.',
    ],
    4 => [
        'id' => 'Disclosure mulai selaras ISSB/TCFD dengan indikator kinerja.',
        'en' => 'Disclosure is beginning to align with ISSB/TCFD, including performance indicators.',
    ],
    5 => [
        'id' => 'Terdapat impact indicators yang terukur dan selaras ISSB/SDGs.',
        'en' => 'Measurable impact indicators are disclosed and aligned with the ISSB and SDGs.',
    ],
],

        'C1' => [
    1 => [
        'id' => 'Tidak ada identifikasi risiko fisik/transisi.',
        'en' => 'There is no identification of physical or transition climate risks.',
    ],
    2 => [
        'id' => 'Identifikasi ad-hoc tanpa data pendukung.',
        'en' => 'Identification is conducted on an ad hoc basis without supporting data.',
    ],
    3 => [
        'id' => 'Identifikasi berbasis lokasi, aset atau unit bisnis.',
        'en' => 'Risk identification is based on locations, assets, or business units.',
    ],
    4 => [
        'id' => 'Menggunakan data ilmiah/regulator seperti IPCC, BMKG, BNPB.',
        'en' => 'Scientific and regulatory data such as IPCC, BMKG, and BNPB are used.',
    ],
    5 => [
        'id' => 'Risiko dikaitkan dengan nilai finansial dan keputusan bisnis.',
        'en' => 'Climate risks are linked to financial value and business decision-making.',
    ],
],

'C2' => [
    1 => [
        'id' => 'Tidak ada sistem mitigasi/respons risiko iklim.',
        'en' => 'There is no climate risk mitigation or response system.',
    ],
    2 => [
        'id' => 'Ada rencana dasar tetapi belum diuji.',
        'en' => 'A basic response plan exists but has not been tested.',
    ],
    3 => [
        'id' => 'SOP mitigasi risiko iklim tersedia.',
        'en' => 'Standard operating procedures for climate risk mitigation are available.',
    ],
    4 => [
        'id' => 'Sistem terintegrasi ke manajemen risiko korporat.',
        'en' => 'The system is integrated into the corporate risk management framework.',
    ],
    5 => [
        'id' => 'Sistem digital/berbasis data dengan monitoring dan respons lintas fungsi.',
        'en' => 'A digital, data-driven system with cross-functional monitoring and response is implemented.',
    ],
],

'C3' => [
    1 => [
        'id' => 'Tidak ada integrasi ke ERM.',
        'en' => 'Climate risks are not integrated into Enterprise Risk Management (ERM).',
    ],
    2 => [
        'id' => 'Integrasi masih parsial atau informal.',
        'en' => 'Integration is still partial or informal.',
    ],
    3 => [
        'id' => 'Risiko iklim masuk laporan risiko tahunan.',
        'en' => 'Climate risks are included in the annual risk report.',
    ],
    4 => [
        'id' => 'Risiko iklim disetujui/diawasi dewan dalam kerangka ERM.',
        'en' => 'Climate risks are reviewed and overseen by the board within the ERM framework.',
    ],
    5 => [
        'id' => 'ERM diperbarui berkala dan memengaruhi alokasi modal/keputusan strategis.',
        'en' => 'The ERM framework is updated regularly and influences capital allocation and strategic decisions.',
    ],
],

'C4' => [
    1 => [
        'id' => 'Tidak ada pelaporan risiko iklim.',
        'en' => 'There is no climate risk reporting.',
    ],
    2 => [
        'id' => 'Pelaporan hanya internal dan tidak rutin.',
        'en' => 'Reporting is internal only and conducted irregularly.',
    ],
    3 => [
        'id' => 'Risiko iklim dilaporkan tahunan.',
        'en' => 'Climate risks are reported annually.',
    ],
    4 => [
        'id' => 'Ada bagian khusus TCFD/ISSB atau laporan risiko kepada dewan.',
        'en' => 'There is a dedicated TCFD/ISSB section or climate risk report submitted to the board.',
    ],
    5 => [
        'id' => 'Pelaporan publik lengkap dan mendapat assurance independen.',
        'en' => 'Comprehensive public reporting is supported by independent assurance.',
    ],
],

        'D1' => [
    1 => [
        'id' => 'Tidak ada laporan emisi GRK.',
        'en' => 'No greenhouse gas (GHG) emissions reporting is available.',
    ],
    2 => [
        'id' => 'Hanya Scope 1-2 atau data terbatas.',
        'en' => 'Only Scope 1 and 2 emissions or limited emissions data are reported.',
    ],
    3 => [
        'id' => 'Scope 1-2 lengkap dan Scope 3 sebagian tanpa verifikasi.',
        'en' => 'Scope 1 and 2 emissions are fully reported, while Scope 3 emissions are partially reported without verification.',
    ],
    4 => [
        'id' => 'Inventaris emisi diverifikasi eksternal.',
        'en' => 'The greenhouse gas inventory is externally verified.',
    ],
    5 => [
        'id' => 'Disclosure selaras TCFD/CDP/GHG Protocol dan digunakan untuk target.',
        'en' => 'The disclosure is aligned with the TCFD, CDP, and GHG Protocol, and is used to establish emissions reduction targets.',
    ],
],

'D2' => [
    1 => [
        'id' => 'Tidak dihitung.',
        'en' => 'Emissions intensity is not measured.',
    ],
    2 => [
        'id' => 'Dihitung parsial per unit produk.',
        'en' => 'Emissions intensity is measured only for selected product units.',
    ],
    3 => [
        'id' => 'Tren efisiensi positif mulai terlihat.',
        'en' => 'A positive trend in emissions efficiency has begun to emerge.',
    ],
    4 => [
        'id' => 'Dikaitkan dengan efisiensi input pupuk, energi, air atau lahan.',
        'en' => 'Emissions intensity is linked to fertilizer, energy, water, or land-use efficiency.',
    ],
    5 => [
        'id' => 'Penurunan GRK >5% per tahun dan dilaporkan.',
        'en' => 'GHG emissions decrease by more than 5% annually and are publicly reported.',
    ],
],

'D4' => [
    1 => [
        'id' => 'Tidak ada investasi adaptasi.',
        'en' => 'There is no investment in climate adaptation.',
    ],
    2 => [
        'id' => 'Investasi adaptasi sangat terbatas atau <5% belanja relevan.',
        'en' => 'Climate adaptation investment is very limited or represents less than 5% of relevant expenditure.',
    ],
    3 => [
        'id' => 'CAPEX adaptasi 5-10% atau ada proyek adaptasi prioritas.',
        'en' => 'Adaptation CAPEX represents 5–10% of relevant investment or priority adaptation projects have been implemented.',
    ],
    4 => [
        'id' => 'CAPEX adaptasi >10% dan terintegrasi dalam perencanaan aset.',
        'en' => 'Adaptation CAPEX exceeds 10% and is integrated into asset planning.',
    ],
    5 => [
        'id' => 'CAPEX adaptasi >20% disertai indikator hasil dan evaluasi tahunan.',
        'en' => 'Adaptation CAPEX exceeds 20%, supported by performance indicators and annual evaluations.',
    ],
],

'D5' => [
    1 => [
        'id' => 'Tidak ada praktik/metrik adaptasi.',
        'en' => 'There are no climate adaptation practices or metrics.',
    ],
    2 => [
        'id' => 'Skala percobaan/ad-hoc.',
        'en' => 'Adaptation is implemented only on a pilot or ad hoc basis.',
    ],
    3 => [
        'id' => 'Implementasi terbatas pada sebagian lahan.',
        'en' => 'Adaptation practices are implemented on only part of the agricultural land.',
    ],
    4 => [
        'id' => 'Mayoritas lahan menerapkan adaptasi air, tanah atau varietas.',
        'en' => 'Most agricultural land applies adaptation measures related to water, soil, or crop varieties.',
    ],
    5 => [
        'id' => 'Inovasi adaptasi terukur terhadap kekeringan/banjir dan berdampak pada produktivitas.',
        'en' => 'Climate adaptation innovations demonstrate measurable resilience to droughts and floods while improving productivity.',
    ],
],

        'E1' => [
    1 => [
        'id' => 'Tidak ada asesmen.',
        'en' => 'No supply chain risk assessment has been conducted.',
    ],
    2 => [
        'id' => 'Hanya mitra/petani utama.',
        'en' => 'Assessment covers only key partners or major farmers.',
    ],
    3 => [
        'id' => '>50% petani/mitra terdata.',
        'en' => 'More than 50% of farmers or partners have been assessed.',
    ],
    4 => [
        'id' => 'Termasuk risiko sosial dan iklim.',
        'en' => 'The assessment includes both social and climate-related risks.',
    ],
    5 => [
        'id' => 'Diperbarui tahunan dengan verifikasi/audit/sertifikasi.',
        'en' => 'The assessment is updated annually and supported by verification, audits, or certification.',
    ],
],

'E2' => [
    1 => [
        'id' => 'Tidak ada program.',
        'en' => 'There is no smallholder farmer partnership program.',
    ],
    2 => [
        'id' => 'Donasi/ad-hoc.',
        'en' => 'Support is limited to donations or ad hoc activities.',
    ],
    3 => [
        'id' => 'Pelatihan terbatas.',
        'en' => 'Limited training programs are provided.',
    ],
    4 => [
        'id' => 'Replanting, akses modal dan pendampingan produksi.',
        'en' => 'Programs include replanting, access to financing, and production assistance.',
    ],
    5 => [
        'id' => 'Peningkatan produktivitas dan resiliensi komunitas terukur.',
        'en' => 'The program demonstrates measurable improvements in productivity and community resilience.',
    ],
],

'E3' => [
    1 => [
        'id' => 'Tidak ada strategi just transition.',
        'en' => 'There is no just transition strategy.',
    ],
    2 => [
        'id' => 'Disebut secara umum tanpa program.',
        'en' => 'A just transition is mentioned generally without any supporting programs.',
    ],
    3 => [
        'id' => 'Ada program untuk pekerja/kelompok terdampak.',
        'en' => 'Programs are available for affected workers and vulnerable groups.',
    ],
    4 => [
        'id' => 'Program terkait SDG 8 dan SDG 13 serta kebijakan SDM.',
        'en' => 'Programs are aligned with SDG 8, SDG 13, and human resource policies.',
    ],
    5 => [
        'id' => 'Evaluasi sosial tahunan dan integrasi penuh ke strategi transisi.',
        'en' => 'Annual social impact evaluations are conducted and fully integrated into the company’s transition strategy.',
    ],
],

'E4' => [
    1 => [
        'id' => 'Hanya CSR umum tanpa fokus ketahanan iklim.',
        'en' => 'Only general CSR activities are conducted without a focus on climate resilience.',
    ],
    2 => [
        'id' => 'Ada proyek adaptasi lokal kecil/ad-hoc.',
        'en' => 'Small-scale or ad hoc local climate adaptation projects are implemented.',
    ],
    3 => [
        'id' => 'Program multiyear untuk komunitas rentan.',
        'en' => 'Multi-year resilience programs are implemented for vulnerable communities.',
    ],
    4 => [
        'id' => 'Dampak terukur pada air, bencana, kesehatan atau livelihood.',
        'en' => 'Programs demonstrate measurable impacts on water resources, disaster resilience, public health, or livelihoods.',
    ],
    5 => [
        'id' => 'Kemitraan publik-swasta dengan hasil terukur dan skalabilitas.',
        'en' => 'Public-private partnerships deliver measurable outcomes with scalable impacts.',
    ],
],

'E5' => [
    1 => [
        'id' => 'Tidak ada mekanisme keluhan/partisipasi.',
        'en' => 'There is no grievance mechanism or stakeholder participation process.',
    ],
    2 => [
        'id' => 'Mekanisme ad-hoc dan tidak terdokumentasi.',
        'en' => 'Mechanisms are ad hoc and lack formal documentation.',
    ],
    3 => [
        'id' => 'Sistem formal tersedia dan dapat digunakan pemangku kepentingan.',
        'en' => 'A formal grievance mechanism is available and accessible to stakeholders.',
    ],
    4 => [
        'id' => 'Keluhan dianalisis trennya dan ditindaklanjuti.',
        'en' => 'Grievances are analyzed for trends and appropriate follow-up actions are taken.',
    ],
    5 => [
        'id' => 'Sistem terbuka berbasis data publik dengan pelaporan kinerja.',
        'en' => 'An open, data-driven grievance system is supported by public performance reporting.',
    ],
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
                    'description_id' =>$description['id'],
                    'description_en' =>$description['en'],
                ]);
            }
        }
    }
}
