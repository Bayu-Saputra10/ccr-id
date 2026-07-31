<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturing;
use App\Models\ManufacturingScore;

class ManufacturingScoreSeeder extends Seeder
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
                'en' => 'No formal evidence of board oversight on climate-related issues.',
            ],
            2 => [
                'id' => 'Isu iklim hanya disebut secara umum tanpa bukti aktivitas dewan.',
                'en' => 'Climate issues are mentioned only generally without evidence of board activities.',
            ],
            3 => [
                'id' => 'Dewan menerima laporan risiko iklim secara periodik.',
                'en' => 'The board receives periodic reports on climate-related risks.',
            ],
            4 => [
                'id' => 'Dewan memberi arahan atas strategi, target atau keputusan iklim.',
                'en' => 'The board provides direction on climate strategy, targets, or decisions.',
            ],
            5 => [
                'id' => 'Dewan/komite aktif mengawasi isu iklim dengan agenda, keputusan dan tindak lanjut terdokumentasi.',
                'en' => 'The board or committee actively oversees climate-related issues with documented agendas, decisions, and follow-up actions.',
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
                'en' => 'A cross-functional committee actively operates with measurable outputs, targets, and outcomes.',
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
                'en' => 'The governance disclosure follows the TCFD/ISSB framework.',
            ],
            5 => [
                'id' => 'Pengungkapan lengkap dan mendapat assurance/pemeriksaan independen.',
                'en' => 'The disclosure is comprehensive and has been independently assured or verified.',
            ],
        ],

        'B1' => [
            1 => [
                'id' => 'Tidak dilakukan identifikasi risiko dan peluang iklim.',
                'en' => 'No identification of climate-related risks and opportunities is conducted.',
            ],
            2 => [
                'id' => 'Identifikasi masih kualitatif umum/ad-hoc.',
                'en' => 'Identification is still general, qualitative, or ad hoc.',
            ],
            3 => [
                'id' => 'Risiko iklim masuk dalam risk register atau ERM.',
                'en' => 'Climate-related risks are included in the risk register or Enterprise Risk Management (ERM).',
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
                'en' => 'There is no analysis of climate-related impacts.',
            ],
            2 => [
                'id' => 'Analisis kualitatif sederhana tanpa implikasi finansial.',
                'en' => 'A simple qualitative analysis is performed without financial implications.',
            ],
            3 => [
                'id' => 'Ada analisis finansial terbatas pada biaya, aset atau operasi.',
                'en' => 'Financial analysis is limited to costs, assets, or operational impacts.',
            ],
            4 => [
                'id' => 'Dampak digunakan dalam CAPEX/OPEX planning atau strategi bisnis.',
                'en' => 'Climate impacts are incorporated into CAPEX/OPEX planning and business strategy.',
            ],
            5 => [
                'id' => 'Dampak kuantitatif terhadap pendapatan, biaya, aset dan model bisnis.',
                'en' => 'Quantitative impacts on revenue, costs, assets, and the business model are comprehensively assessed.',
            ],
        ],

        'B4' => [
            1 => [
                'id' => 'Tidak ada strategi.',
                'en' => 'There is no supply chain decarbonization strategy.',
            ],
            2 => [
                'id' => 'Hanya target internal.',
                'en' => 'Only internal emission reduction targets are established.',
            ],
            3 => [
                'id' => 'Target supplier utama.',
                'en' => 'Emission reduction targets are applied to key suppliers.',
            ],
            4 => [
                'id' => 'Diterapkan ke seluruh supplier besar.',
                'en' => 'The strategy is implemented across all major suppliers.',
            ],
            5 => [
                'id' => 'Supplier memiliki target SBTi/target emisi sendiri dan dimonitor.',
                'en' => 'Suppliers have their own SBTi or emission reduction targets, which are regularly monitored.',
            ],
        ],

        'B5' => [
            1 => [
                'id' => 'Tidak ada keterkaitan SDGs/ISSB.',
                'en' => 'There is no alignment with the SDGs or ISSB Standards.',
            ],
            2 => [
                'id' => 'Ada pemetaan umum tanpa indikator terukur.',
                'en' => 'General mapping exists but without measurable indicators.',
            ],
            3 => [
                'id' => 'SDG 13 atau isu iklim dimasukkan dalam laporan.',
                'en' => 'SDG 13 or climate-related issues are included in corporate reporting.',
            ],
            4 => [
                'id' => 'Disclosure mulai selaras ISSB/TCFD dengan indikator kinerja.',
                'en' => 'Disclosures begin aligning with ISSB/TCFD requirements using performance indicators.',
            ],
            5 => [
                'id' => 'Terdapat impact indicators yang terukur dan selaras ISSB/SDGs.',
                'en' => 'Measured impact indicators are fully aligned with the ISSB Standards and the Sustainable Development Goals (SDGs).',
            ],
        ],

        'C1' => [
            1 => [
                'id' => 'Tidak ada identifikasi risiko fisik/transisi.',
                'en' => 'No identification of physical or transition climate risks.',
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
                'en' => 'Scientific or regulatory data such as IPCC, BMKG, or BNPB are used.',
            ],
            5 => [
                'id' => 'Risiko dikaitkan dengan nilai finansial dan keputusan bisnis.',
                'en' => 'Climate risks are linked to financial values and business decision-making.',
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
                'en' => 'A data-driven digital system supports monitoring and cross-functional response.',
            ],
        ],

        'C3' => [
            1 => [
                'id' => 'Tidak ada integrasi ke ERM.',
                'en' => 'There is no integration into Enterprise Risk Management (ERM).',
            ],
            2 => [
                'id' => 'Integrasi masih parsial atau informal.',
                'en' => 'Integration is partial or informal.',
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
                'en' => 'The ERM framework is regularly updated and influences capital allocation and strategic decisions.',
            ],
        ],

        'C4' => [
            1 => [
                'id' => 'Tidak ada pelaporan risiko iklim.',
                'en' => 'There is no reporting of climate-related risks.',
            ],
            2 => [
                'id' => 'Pelaporan hanya internal dan tidak rutin.',
                'en' => 'Reporting is internal only and conducted irregularly.',
            ],
            3 => [
                'id' => 'Risiko iklim dilaporkan tahunan.',
                'en' => 'Climate-related risks are reported annually.',
            ],
            4 => [
                'id' => 'Ada bagian khusus TCFD/ISSB atau laporan risiko kepada dewan.',
                'en' => 'A dedicated TCFD/ISSB section or board risk report is available.',
            ],
            5 => [
                'id' => 'Pelaporan publik lengkap dan mendapat assurance independen.',
                'en' => 'Public reporting is comprehensive and independently assured.',
            ],
        ],

        'C5' => [
            1 => [
                'id' => 'Tidak ada audit.',
                'en' => 'No energy or emissions audit is conducted.',
            ],
            2 => [
                'id' => 'Audit internal tanpa tindak lanjut.',
                'en' => 'Internal audits are conducted without follow-up actions.',
            ],
            3 => [
                'id' => 'Audit tahunan dengan aksi korektif.',
                'en' => 'Annual audits are conducted with corrective action plans.',
            ],
            4 => [
                'id' => 'Sertifikasi ISO 50001 atau sistem manajemen energi setara.',
                'en' => 'The organization has ISO 50001 certification or an equivalent energy management system.',
            ],
            5 => [
                'id' => 'Audit eksternal tahunan dan hasil dipublikasikan.',
                'en' => 'Annual external audits are conducted and the results are publicly disclosed.',
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
                'en' => 'Energy intensity is not measured.',
            ],
            2 => [
                'id' => 'Diukur tetapi tidak dipantau.',
                'en' => 'Energy intensity is measured but not regularly monitored.',
            ],
            3 => [
                'id' => 'Tren efisiensi positif.',
                'en' => 'A positive trend in energy efficiency is demonstrated.',
            ],
            4 => [
                'id' => 'Penurunan >3% per tahun.',
                'en' => 'Energy intensity decreases by more than 3% annually.',
            ],
            5 => [
                'id' => 'Penggunaan energi terbarukan >=25% atau efisiensi tervalidasi.',
                'en' => 'Renewable energy accounts for at least 25% of total energy use or energy efficiency improvements are independently verified.',
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
                'en' => 'No non-carbon climate adaptation metrics are available.',
            ],
            2 => [
                'id' => 'Metrik hanya mencakup sebagian kecil aset/operasi.',
                'en' => 'Metrics cover only a limited portion of assets or operations.',
            ],
            3 => [
                'id' => 'Metrik mencakup mayoritas aset kritis.',
                'en' => 'Metrics cover most critical assets.',
            ],
            4 => [
                'id' => 'Metrik mencakup indikator sosial-ekologis dan operasional.',
                'en' => 'Metrics include socio-ecological and operational adaptation indicators.',
            ],
            5 => [
                'id' => 'Dampak adaptasi diukur, dievaluasi, dan dilaporkan tahunan.',
                'en' => 'Adaptation impacts are measured, evaluated, and reported annually.',
            ],
        ],

        'D6' => [
            1 => [
                'id' => 'Tidak diukur.',
                'en' => 'Waste and water management performance is not measured.',
            ],
            2 => [
                'id' => 'Pengelolaan dasar.',
                'en' => 'Basic waste and water management practices are implemented.',
            ],
            3 => [
                'id' => 'Sistem reuse/recycle 25% limbah/air.',
                'en' => 'At least 25% of waste or water is reused or recycled.',
            ],
            4 => [
                'id' => '>50% limbah/air didaur ulang/digunakan kembali.',
                'en' => 'More than 50% of waste or water is recycled or reused.',
            ],
            5 => [
                'id' => 'Sirkularitas penuh/zero waste dengan target dan verifikasi.',
                'en' => 'A full circular economy or zero-waste approach is implemented with measurable targets and independent verification.',
            ],
        ],

        'E2' => [
            1 => [
                'id' => 'Tidak ada pelibatan.',
                'en' => 'There is no green supplier engagement.',
            ],
            2 => [
                'id' => 'Edukasi dasar kepada supplier.',
                'en' => 'Basic sustainability awareness is provided to suppliers.',
            ],
            3 => [
                'id' => 'Supplier utama berkomitmen terhadap ESG.',
                'en' => 'Key suppliers have committed to ESG principles.',
            ],
            4 => [
                'id' => '75% supplier tersertifikasi/terverifikasi hijau.',
                'en' => 'At least 75% of suppliers are environmentally certified or verified.',
            ],
            5 => [
                'id' => '100% supplier masuk ke sistem pengadaan hijau dan dimonitor.',
                'en' => 'All suppliers are included in a green procurement system and are regularly monitored.',
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
                'id' => 'Hanya CSR umum tanpa fokus pada ketahanan iklim.',
                'en' => 'Only general CSR activities are conducted without a focus on climate resilience.',
            ],
            2 => [
                'id' => 'Ada proyek adaptasi lokal kecil/ad hoc.',
                'en' => 'Small-scale or ad hoc local climate adaptation projects are implemented.',
            ],
            3 => [
                'id' => 'Program multiyear untuk komunitas rentan.',
                'en' => 'Multi-year resilience programs are implemented for vulnerable communities.',
            ],
            4 => [
                'id' => 'Dampak yang terukur pada air, bencana, kesehatan atau livelihood.',
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
                'id' => 'Mekanisme ad hoc dan tidak terdokumentasi.',
                'en' => 'Mechanisms are ad hoc and lack formal documentation.',
            ],
            3 => [
                'id' => 'Sistem formal tersedia dan dapat digunakan oleh pemangku kepentingan.',
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
            $indicator = Manufacturing::where('indicator_id', $indicatorCode)->first();

            if (!$indicator) {
                continue;
            }

            foreach ($values as $score => $description) {

        ManufacturingScore::create([
            'manufacturing_id' => $indicator->id,
            'score' => $score,
            'description_id' => $description['id'],
            'description_en' => $description['en'],
        ]);

    }
        }
    }
}
