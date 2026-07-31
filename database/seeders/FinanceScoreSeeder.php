<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Finance;
use App\Models\FinanceScore;

class FinanceScoreSeeder extends Seeder
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
        'en' => 'There is no formal evidence of board oversight on climate-related issues.',
    ],
    2 => [
        'id' => 'Isu iklim hanya disebut secara umum tanpa bukti aktivitas dewan.',
        'en' => 'Climate issues are mentioned only in general terms without evidence of board activities.',
    ],
    3 => [
        'id' => 'Dewan menerima laporan risiko iklim secara periodik.',
        'en' => 'The board receives periodic climate risk reports.',
    ],
    4 => [
        'id' => 'Dewan memberi arahan atas strategi, target atau keputusan iklim.',
        'en' => 'The board provides direction on climate strategies, targets, or decisions.',
    ],
    5 => [
        'id' => 'Dewan/komite aktif mengawasi isu iklim dengan agenda, keputusan dan tindak lanjut terdokumentasi.',
        'en' => 'The board or committee actively oversees climate issues with documented agendas, decisions, and follow-up actions.',
    ],
],

'A2' => [
    1 => [
        'id' => 'Tidak ada peran formal manajemen senior.',
        'en' => 'There is no formal role for senior management.',
    ],
    2 => [
        'id' => 'Ada unit ESG/lingkungan tetapi belum strategis.',
        'en' => 'An ESG or environmental unit exists but has not yet assumed a strategic role.',
    ],
    3 => [
        'id' => 'Tanggung jawab iklim dipegang fungsi tertentu seperti CSO/CFO/ESG unit.',
        'en' => 'Climate responsibilities are assigned to functions such as the CSO, CFO, or ESG unit.',
    ],
    4 => [
        'id' => 'Tanggung jawab iklim melekat pada struktur eksekutif dan KPI manajemen.',
        'en' => 'Climate responsibilities are integrated into the executive structure and management KPIs.',
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
        'en' => 'A committee exists but is inactive or lacks a clear agenda.',
    ],
    3 => [
        'id' => 'Komite rapat minimal tahunan dan membahas isu iklim.',
        'en' => 'The committee meets at least annually and discusses climate-related issues.',
    ],
    4 => [
        'id' => 'Komite memberi rekomendasi berkala kepada dewan/manajemen.',
        'en' => 'The committee provides periodic recommendations to the board and management.',
    ],
    5 => [
        'id' => 'Komite lintas fungsi aktif dengan output, target dan hasil terukur.',
        'en' => 'A cross-functional committee actively delivers measurable outputs, targets, and results.',
    ],
],

'A5' => [
    1 => [
        'id' => 'Tidak ada pengungkapan tata kelola iklim.',
        'en' => 'There is no disclosure of climate governance.',
    ],
    2 => [
        'id' => 'Hanya disebut singkat dalam laporan keberlanjutan.',
        'en' => 'Climate governance is only briefly mentioned in the sustainability report.',
    ],
    3 => [
        'id' => 'Diungkap dalam annual report/sustainability report dengan struktur dasar.',
        'en' => 'Climate governance is disclosed in the annual or sustainability report using a basic structure.',
    ],
    4 => [
        'id' => 'Mengikuti struktur TCFD/ISSB untuk governance.',
        'en' => 'The disclosure follows the TCFD/ISSB governance framework.',
    ],
    5 => [
        'id' => 'Pengungkapan lengkap dan mendapat assurance/pemeriksaan independen.',
        'en' => 'The disclosure is comprehensive and supported by independent assurance.',
    ],
],

        'B1' => [
    1 => [
        'id' => 'Tidak dilakukan identifikasi risiko dan peluang iklim.',
        'en' => 'Climate risks and opportunities are not identified.',
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
        'en' => 'Climate risks and opportunities are quantified and incorporated into strategic planning.',
    ],
    5 => [
        'id' => 'Risiko dan peluang diikuti rencana mitigasi, adaptasi dan peluang bisnis.',
        'en' => 'Climate risks and opportunities are supported by mitigation plans, adaptation measures, and business opportunity strategies.',
    ],
],

'B2' => [
    1 => [
        'id' => 'Tidak ada analisis dampak iklim.',
        'en' => 'No climate impact analysis has been conducted.',
    ],
    2 => [
        'id' => 'Analisis kualitatif sederhana tanpa implikasi finansial.',
        'en' => 'Only a simple qualitative analysis is performed without financial implications.',
    ],
    3 => [
        'id' => 'Ada analisis finansial terbatas pada biaya, aset atau operasi.',
        'en' => 'Financial analysis is limited to costs, assets, or operations.',
    ],
    4 => [
        'id' => 'Dampak digunakan dalam CAPEX/OPEX planning atau strategi bisnis.',
        'en' => 'Climate impacts are incorporated into CAPEX/OPEX planning or business strategy.',
    ],
    5 => [
        'id' => 'Dampak kuantitatif terhadap pendapatan, biaya, aset, dan model bisnis.',
        'en' => 'Quantitative climate impacts on revenue, costs, assets, and the business model are assessed.',
    ],
],

'B3' => [
    1 => [
        'id' => 'Tidak dilakukan climate scenario analysis portofolio.',
        'en' => 'No climate scenario analysis is performed for the portfolio.',
    ],
    2 => [
        'id' => 'Analisis umum tanpa data kuantitatif.',
        'en' => 'General analysis is conducted without quantitative data.',
    ],
    3 => [
        'id' => 'Model internal untuk sektor tertentu.',
        'en' => 'Internal scenario models are applied to selected sectors.',
    ],
    4 => [
        'id' => 'Menggunakan NGFS/OJK CRMS/IWST pada portofolio utama.',
        'en' => 'NGFS, OJK CRMS, or IWST scenarios are applied to major portfolios.',
    ],
    5 => [
        'id' => 'Diterapkan pada seluruh portofolio dan mengukur dampak NPL/CAR.',
        'en' => 'Applied across the entire portfolio with assessment of impacts on NPL and CAR.',
    ],
],

'B4' => [
    1 => [
        'id' => 'Tidak ada kebijakan.',
        'en' => 'There is no green finance policy.',
    ],
    2 => [
        'id' => 'Komitmen umum sustainable finance.',
        'en' => 'Only a general commitment to sustainable finance exists.',
    ],
    3 => [
        'id' => 'Portofolio hijau/transisi <10%.',
        'en' => 'Green and transition finance portfolio is less than 10%.',
    ],
    4 => [
        'id' => 'Portofolio hijau/transisi 10-20% dan selaras TKBI.',
        'en' => 'Green and transition finance portfolio reaches 10–20% and aligns with the Indonesian Green Taxonomy (TKBI).',
    ],
    5 => [
        'id' => 'Portofolio >20%, kebijakan transition finance dan target dekarbonisasi portofolio.',
        'en' => 'Green and transition finance portfolio exceeds 20%, supported by a transition finance policy and portfolio decarbonization targets.',
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
        'en' => 'SDG 13 or climate-related issues are included in the report.',
    ],
    4 => [
        'id' => 'Disclosure mulai selaras ISSB/TCFD dengan indikator kinerja.',
        'en' => 'Disclosures are aligned with ISSB/TCFD and include performance indicators.',
    ],
    5 => [
        'id' => 'Terdapat impact indicators yang terukur dan selaras ISSB/SDGs.',
        'en' => 'Measurable impact indicators are disclosed in alignment with ISSB and the SDGs.',
    ],
],

        'C1' => [
    1 => [
        'id' => 'Tidak ada identifikasi risiko iklim dalam portofolio kredit.',
        'en' => 'There is no identification of climate risks within the credit portfolio.',
    ],
    2 => [
        'id' => 'Identifikasi berdasarkan judgement umum sektor.',
        'en' => 'Risk identification is based only on general sector judgment.',
    ],
    3 => [
        'id' => 'Penilaian ESG/iklim parsial pada debitur tertentu.',
        'en' => 'Partial ESG/climate assessments are conducted for selected borrowers.',
    ],
    4 => [
        'id' => 'Climate credit risk assessment diterapkan pada sektor berisiko tinggi.',
        'en' => 'Climate credit risk assessments are applied to high-risk sectors.',
    ],
    5 => [
        'id' => 'Terintegrasi ke ERM, credit scoring, PD/LGD adjustment dan risk appetite bank.',
        'en' => 'Climate risk is integrated into ERM, credit scoring, PD/LGD adjustments, and the bank’s risk appetite.',
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
        'en' => 'There is no greenhouse gas (GHG) emissions reporting.',
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
        'en' => 'The disclosure is aligned with the TCFD, CDP, and GHG Protocol and is used to establish emissions reduction targets.',
    ],
],

'D3' => [
    1 => [
        'id' => 'Tidak dihitung.',
        'en' => 'Financed emissions are not calculated.',
    ],
    2 => [
        'id' => 'Dihitung tanpa target pengurangan.',
        'en' => 'Financed emissions are calculated but without reduction targets.',
    ],
    3 => [
        'id' => 'Memiliki target internal per sektor.',
        'en' => 'Internal financed emissions reduction targets are established for specific sectors.',
    ],
    4 => [
        'id' => 'Menggunakan metodologi PCAF/SBTi-FI dan target transisi portofolio.',
        'en' => 'The institution applies the PCAF and/or SBTi-FI methodology with portfolio transition targets.',
    ],
    5 => [
        'id' => 'Dilaporkan, diverifikasi dan digunakan dalam strategi dekarbonisasi pembiayaan.',
        'en' => 'Financed emissions are disclosed, independently verified, and integrated into the financing decarbonization strategy.',
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
        'id' => 'Tidak ada metrik adaptasi non-karbon.',
        'en' => 'There are no non-carbon climate adaptation metrics.',
    ],
    2 => [
        'id' => 'Metrik hanya mencakup sebagian kecil aset/operasi.',
        'en' => 'Adaptation metrics cover only a small portion of assets or operations.',
    ],
    3 => [
        'id' => 'Metrik mencakup mayoritas aset kritis.',
        'en' => 'Adaptation metrics cover the majority of critical assets.',
    ],
    4 => [
        'id' => 'Metrik mencakup indikator sosial-ekologis dan operasional.',
        'en' => 'Metrics include socio-ecological and operational adaptation indicators.',
    ],
    5 => [
        'id' => 'Dampak adaptasi diukur, dievaluasi dan dilaporkan tahunan.',
        'en' => 'Adaptation outcomes are measured, evaluated, and reported annually.',
    ],
],

'D6' => [
    1 => [
        'id' => 'Tidak dilaporkan.',
        'en' => 'Exposure to high-carbon sectors is not reported.',
    ],
    2 => [
        'id' => 'Disclosure parsial sektor karbon tinggi.',
        'en' => 'Only partial disclosure of high-carbon sector exposure is provided.',
    ],
    3 => [
        'id' => 'Memiliki batas risiko sektor karbon tinggi.',
        'en' => 'Exposure limits for high-carbon sectors have been established.',
    ],
    4 => [
        'id' => 'Disclosure publik dan monitoring sektor prioritas.',
        'en' => 'Public disclosure and monitoring of priority high-carbon sectors are implemented.',
    ],
    5 => [
        'id' => 'Konsisten dengan SASB/OJK dan memiliki strategi pengurangan exposure karbon intensif.',
        'en' => 'Reporting is aligned with SASB and OJK guidance and supported by a strategy to reduce exposure to carbon-intensive sectors.',
    ],
],

        'E2' => [
    1 => [
        'id' => 'Tidak ada program.',
        'en' => 'There is no borrower capacity-building program.',
    ],
    2 => [
        'id' => 'Edukasi ESG umum.',
        'en' => 'Only general ESG awareness programs are provided.',
    ],
    3 => [
        'id' => 'Pelatihan ESG/climate awareness tahunan.',
        'en' => 'Annual ESG and climate awareness training is provided.',
    ],
    4 => [
        'id' => 'Pendampingan borrower untuk climate reporting/transition planning.',
        'en' => 'Borrowers receive assistance in climate reporting and transition planning.',
    ],
    5 => [
        'id' => 'Climate readiness borrower terintegrasi dalam kriteria kredit dan monitoring.',
        'en' => 'Borrower climate readiness is integrated into credit assessment criteria and ongoing monitoring.',
    ],
],

'E3' => [
    1 => [
        'id' => 'Tidak ada strategi just transition.',
        'en' => 'There is no just transition strategy.',
    ],
    2 => [
        'id' => 'Disebut secara umum tanpa program.',
        'en' => 'A just transition is mentioned generally without supporting programs.',
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
            $indicator = Finance::where(
                'indicator_id', $indicatorCode
            )->first();

            if (!$indicator) {
                continue;
            }

            foreach ($values as $score => $description) {
                FinanceScore::create([
                    'finance_id' => $indicator->id,
                    'score' => $score,
                    'description_id' => $description['id'],
                    'description_en' => $description['en'],
                ]);
            }
        }
    }
}
