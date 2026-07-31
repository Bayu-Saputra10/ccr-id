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
    1 => [
        'id' => 'Tidak ada bukti formal pengawasan dewan atas isu iklim.',
        'en' => 'There is no formal evidence of board oversight of climate-related issues.',
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
        'en' => 'The board provides direction on climate strategy, targets, or decisions.',
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
        'en' => 'An ESG/environmental unit exists but does not yet have a strategic role.',
    ],
    3 => [
        'id' => 'Tanggung jawab iklim dipegang fungsi tertentu seperti CSO/CFO/ESG unit.',
        'en' => 'Climate responsibility is assigned to specific functions such as the CSO, CFO, or ESG unit.',
    ],
    4 => [
        'id' => 'Tanggung jawab iklim melekat pada struktur eksekutif dan KPI manajemen.',
        'en' => 'Climate responsibility is embedded within the executive structure and management KPIs.',
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
        'en' => 'The committee provides regular recommendations to the board and management.',
    ],
    5 => [
        'id' => 'Komite lintas fungsi aktif dengan output, target dan hasil terukur.',
        'en' => 'A cross-functional committee actively operates with measurable outputs, targets, and results.',
    ],
],

'A4' => [
    1 => [
        'id' => 'Tidak ada KPI iklim dalam insentif.',
        'en' => 'There are no climate-related KPIs in the incentive scheme.',
    ],
    2 => [
        'id' => 'KPI iklim disebut tetapi tidak memengaruhi bonus/remunerasi.',
        'en' => 'Climate KPIs are mentioned but do not affect bonuses or remuneration.',
    ],
    3 => [
        'id' => 'Bonus terkait efisiensi energi atau kinerja lingkungan terbatas.',
        'en' => 'Bonuses are linked to energy efficiency or limited environmental performance.',
    ],
    4 => [
        'id' => 'Bonus terkait target GRK/iklim tahunan.',
        'en' => 'Bonuses are linked to annual GHG emissions or climate targets.',
    ],
    5 => [
        'id' => 'Remunerasi eksekutif terkait SBTi/net-zero dan hasil terverifikasi.',
        'en' => 'Executive remuneration is linked to SBTi/net-zero targets and verified performance outcomes.',
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
        'en' => 'Climate governance is disclosed in the annual report or sustainability report with a basic structure.',
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
        'id' => 'Dampak kuantitatif terhadap pendapatan, biaya, aset dan model bisnis.',
        'en' => 'Quantitative climate impacts on revenue, costs, assets, and the business model are assessed.',
    ],
],

'B3' => [
    1 => [
        'id' => 'Tidak ada analisis skenario.',
        'en' => 'No climate scenario analysis has been conducted.',
    ],
    2 => [
        'id' => 'Analisis kualitatif dasar.',
        'en' => 'Only a basic qualitative scenario analysis is performed.',
    ],
    3 => [
        'id' => 'Analisis memakai proyeksi IPCC/risiko transisi dasar.',
        'en' => 'Scenario analysis uses IPCC projections and basic transition risk assumptions.',
    ],
    4 => [
        'id' => 'Menggunakan skenario IEA/NGFS untuk perencanaan.',
        'en' => 'IEA and NGFS scenarios are applied for strategic planning.',
    ],
    5 => [
        'id' => 'Terintegrasi penuh dalam keputusan investasi dan strategi bisnis.',
        'en' => 'Scenario analysis is fully integrated into investment decisions and business strategy.',
    ],
],

'B4' => [
    1 => [
        'id' => 'Tidak ada rencana transisi energi.',
        'en' => 'There is no energy transition plan.',
    ],
    2 => [
        'id' => 'Target umum tanpa roadmap.',
        'en' => 'General targets exist without a roadmap.',
    ],
    3 => [
        'id' => 'Roadmap terukur jangka menengah.',
        'en' => 'A measurable medium-term transition roadmap has been established.',
    ],
    4 => [
        'id' => 'Strategi NZE 2050 disetujui dewan.',
        'en' => 'The Net Zero Emissions (NZE) 2050 strategy has been approved by the board.',
    ],
    5 => [
        'id' => 'Validasi SBTi/eksternal dan monitoring tahunan.',
        'en' => 'The transition plan is validated by SBTi or another external body and monitored annually.',
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
        'id' => 'Tidak ada identifikasi risiko fisik/transisi.',
        'en' => 'There is no identification of physical or transition climate risks.',
    ],
    2 => [
        'id' => 'Identifikasi ad-hoc tanpa data pendukung.',
        'en' => 'Risk identification is conducted on an ad hoc basis without supporting data.',
    ],
    3 => [
        'id' => 'Identifikasi berbasis lokasi, aset atau unit bisnis.',
        'en' => 'Risk identification is based on locations, assets, or business units.',
    ],
    4 => [
        'id' => 'Menggunakan data ilmiah/regulator seperti IPCC, BMKG, BNPB.',
        'en' => 'Scientific and regulatory data, such as IPCC, BMKG, and BNPB, are used in the assessment.',
    ],
    5 => [
        'id' => 'Risiko dikaitkan dengan nilai finansial dan keputusan bisnis.',
        'en' => 'Climate risks are linked to financial impacts and integrated into business decision-making.',
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

'D2' => [
    1 => [
        'id' => 'Tidak dihitung.',
        'en' => 'Carbon intensity is not calculated.',
    ],
    2 => [
        'id' => 'Dihitung tanpa tren atau target.',
        'en' => 'Carbon intensity is calculated without trend analysis or reduction targets.',
    ],
    3 => [
        'id' => 'Penurunan intensitas <2% per tahun.',
        'en' => 'Carbon intensity decreases by less than 2% per year.',
    ],
    4 => [
        'id' => 'Penurunan intensitas 2-5% per tahun.',
        'en' => 'Carbon intensity decreases by 2–5% per year.',
    ],
    5 => [
        'id' => 'Penurunan intensitas >5% per tahun dan diverifikasi.',
        'en' => 'Carbon intensity decreases by more than 5% per year and is independently verified.',
    ],
],

'D3' => [
    1 => [
        'id' => 'Tidak ada target emisi.',
        'en' => 'There are no greenhouse gas emissions reduction targets.',
    ],
    2 => [
        'id' => 'Target internal tidak diverifikasi.',
        'en' => 'Internal emissions reduction targets exist but are not independently verified.',
    ],
    3 => [
        'id' => 'Target disusun sesuai pendekatan SBTi.',
        'en' => 'Emission reduction targets are developed in accordance with the Science Based Targets initiative (SBTi) approach.',
    ],
    4 => [
        'id' => 'Target diverifikasi/validated by SBTi atau standar setara.',
        'en' => 'Targets are validated by the SBTi or an equivalent recognized standard.',
    ],
    5 => [
        'id' => 'Target diterapkan dan kemajuan dilaporkan tahunan.',
        'en' => 'Targets are implemented and progress is publicly reported on an annual basis.',
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

        'E1' => [
    1 => [
        'id' => 'Tidak ada asesmen risiko rantai pasok energi.',
        'en' => 'No assessment of energy supply chain risks has been conducted.',
    ],
    2 => [
        'id' => 'Mencakup pemasok utama secara terbatas.',
        'en' => 'The assessment covers only a limited number of key suppliers.',
    ],
    3 => [
        'id' => 'Mencakup >50% rantai pasok utama.',
        'en' => 'The assessment covers more than 50% of the primary supply chain.',
    ],
    4 => [
        'id' => 'Termasuk risiko sosial dan iklim pemasok.',
        'en' => 'The assessment includes suppliers’ social and climate-related risks.',
    ],
    5 => [
        'id' => 'Diperbarui tahunan dengan verifikasi/audit pemasok.',
        'en' => 'The assessment is updated annually and supported by supplier verification or audits.',
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
                    'description_id' => $description['id'],
                    'description_en' => $description['en'],
                ]);
            }
        }
    }
}
