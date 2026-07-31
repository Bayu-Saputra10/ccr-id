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
    1 => [
        'id' => 'Tidak ada bukti formal pengawasan dewan atas isu iklim.',
        'en' => 'No formal evidence of board oversight of climate-related issues.',
    ],
    2 => [
        'id' => 'Isu iklim hanya disebut secara umum tanpa bukti aktivitas dewan.',
        'en' => 'Climate issues are mentioned only in general terms without evidence of board activities.',
    ],
    3 => [
        'id' => 'Dewan menerima laporan risiko iklim secara periodik.',
        'en' => 'The board periodically receives climate risk reports.',
    ],
    4 => [
        'id' => 'Dewan memberi arahan atas strategi, target, atau keputusan iklim.',
        'en' => 'The board provides direction on climate strategies, targets, or decisions.',
    ],
    5 => [
        'id' => 'Dewan/komite aktif mengawasi isu iklim dengan agenda, keputusan, dan tindak lanjut terdokumentasi.',
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
        'en' => 'Climate responsibilities are assigned to specific functions such as the CSO, CFO, or ESG unit.',
    ],
    4 => [
        'id' => 'Tanggung jawab iklim melekat pada struktur eksekutif dan KPI manajemen.',
        'en' => 'Climate responsibilities are embedded within the executive structure and management KPIs.',
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
        'en' => 'The committee meets at least annually to discuss climate-related issues.',
    ],
    4 => [
        'id' => 'Komite memberi rekomendasi berkala kepada dewan/manajemen.',
        'en' => 'The committee regularly provides recommendations to the board or management.',
    ],
    5 => [
        'id' => 'Komite lintas fungsi aktif dengan output, target, dan hasil terukur.',
        'en' => 'An active cross-functional committee delivers measurable outputs, targets, and outcomes.',
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
        'en' => 'Disclosed in the annual or sustainability report using a basic governance structure.',
    ],
    4 => [
        'id' => 'Mengikuti struktur TCFD/ISSB untuk governance.',
        'en' => 'Follows the TCFD or ISSB governance disclosure structure.',
    ],
    5 => [
        'id' => 'Pengungkapan lengkap dan mendapat assurance/pemeriksaan independen.',
        'en' => 'Provides comprehensive disclosure with independent assurance.',
    ],
],

        'B1' => [
    1 => [
        'id' => 'Tidak dilakukan identifikasi risiko dan peluang iklim.',
        'en' => 'No identification of climate-related risks and opportunities is performed.',
    ],
    2 => [
        'id' => 'Identifikasi masih kualitatif umum/ad-hoc.',
        'en' => 'Identification remains general, qualitative, and ad hoc.',
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
        'en' => 'Risks and opportunities are supported by mitigation, adaptation, and business opportunity plans.',
    ],
],

'B2' => [
    1 => [
        'id' => 'Tidak ada analisis dampak iklim.',
        'en' => 'No climate impact analysis is conducted.',
    ],
    2 => [
        'id' => 'Analisis kualitatif sederhana tanpa implikasi finansial.',
        'en' => 'Only a basic qualitative analysis is performed without financial implications.',
    ],
    3 => [
        'id' => 'Ada analisis finansial terbatas pada biaya, aset atau operasi.',
        'en' => 'Limited financial analysis is performed on costs, assets, or operations.',
    ],
    4 => [
        'id' => 'Dampak digunakan dalam CAPEX/OPEX planning atau strategi bisnis.',
        'en' => 'Climate impacts are considered in CAPEX/OPEX planning and business strategy.',
    ],
    5 => [
        'id' => 'Dampak kuantitatif terhadap pendapatan, biaya, aset dan model bisnis.',
        'en' => 'Quantitative impacts on revenue, costs, assets, and the business model are assessed.',
    ],
],

'B3' => [
    1 => [
        'id' => 'Tidak ada analisis risiko fisik aset.',
        'en' => 'No physical climate risk assessment for assets is conducted.',
    ],
    2 => [
        'id' => 'Kajian internal dasar.',
        'en' => 'Only a basic internal assessment is performed.',
    ],
    3 => [
        'id' => 'Pemodelan regional.',
        'en' => 'Regional climate risk modelling is conducted.',
    ],
    4 => [
        'id' => 'Analisis berbasis lokasi dan aset kritis.',
        'en' => 'Analysis is based on asset location and critical infrastructure.',
    ],
    5 => [
        'id' => 'Model risiko spasial real-time dan digunakan untuk desain/investasi.',
        'en' => 'Real-time spatial risk models are used for infrastructure design and investment decisions.',
    ],
],

'B5' => [
    1 => [
        'id' => 'Tidak ada keterkaitan SDGs/ISSB.',
        'en' => 'No linkage with the SDGs or ISSB standards.',
    ],
    2 => [
        'id' => 'Ada pemetaan umum tanpa indikator yang terukur.',
        'en' => 'General mapping exists without measurable indicators.',
    ],
    3 => [
        'id' => 'SDG 13 atau isu iklim dimasukkan dalam laporan.',
        'en' => 'SDG 13 or climate-related issues are included in reporting.',
    ],
    4 => [
        'id' => 'Disclosure mulai selaras ISSB/TCFD dan indikator kinerja.',
        'en' => 'Disclosures begin aligning with ISSB/TCFD requirements and performance indicators.',
    ],
    5 => [
        'id' => 'Terdapat impact indicators yang terukur dan selaras ISSB/SDGs.',
        'en' => 'Measurable impact indicators are reported in alignment with ISSB and the SDGs.',
    ],
],

        'C1' => [
    1 => [
        'id' => 'Tidak ada identifikasi risiko fisik/transisi.',
        'en' => 'No identification of physical or transition climate risks.',
    ],
    2 => [
        'id' => 'Identifikasi ad-hoc tanpa data pendukung.',
        'en' => 'Identification is ad hoc without supporting data.',
    ],
    3 => [
        'id' => 'Identifikasi berbasis lokasi, aset atau unit bisnis.',
        'en' => 'Risk identification is based on locations, assets, or business units.',
    ],
    4 => [
        'id' => 'Menggunakan data ilmiah/regulator seperti IPCC, BMKG, BNPB.',
        'en' => 'Uses scientific and regulatory data such as IPCC, BMKG, or BNPB.',
    ],
    5 => [
        'id' => 'Risiko dikaitkan dengan nilai finansial dan keputusan bisnis.',
        'en' => 'Climate risks are linked to financial impacts and business decisions.',
    ],
],

'C2' => [
    1 => [
        'id' => 'Tidak ada sistem mitigasi/respons risiko iklim.',
        'en' => 'No climate risk mitigation or response system exists.',
    ],
    2 => [
        'id' => 'Ada rencana dasar tetapi belum diuji.',
        'en' => 'A basic plan exists but has not been tested.',
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
        'en' => 'A digital, data-driven system provides monitoring and cross-functional response.',
    ],
],

'C3' => [
    1 => [
        'id' => 'Tidak ada integrasi ke ERM.',
        'en' => 'No integration into Enterprise Risk Management (ERM).',
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
        'en' => 'Climate risks are approved and overseen by the board within the ERM framework.',
    ],
    5 => [
        'id' => 'ERM diperbarui berkala dan memengaruhi alokasi modal/keputusan strategis.',
        'en' => 'ERM is regularly updated and influences capital allocation and strategic decisions.',
    ],
],

'C4' => [
    1 => [
        'id' => 'Tidak ada pelaporan risiko iklim.',
        'en' => 'No climate risk reporting.',
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
        'en' => 'A dedicated TCFD/ISSB section or climate risk report is provided to the board.',
    ],
    5 => [
        'id' => 'Pelaporan publik lengkap dan mendapat assurance independen.',
        'en' => 'Comprehensive public reporting with independent assurance.',
    ],
],

        'D1' => [
    1 => [
        'id' => 'Tidak ada laporan emisi GRK.',
        'en' => 'No greenhouse gas (GHG) emissions reporting.',
    ],
    2 => [
        'id' => 'Hanya Scope 1-2 atau data terbatas.',
        'en' => 'Only Scope 1 and 2 emissions or limited data are reported.',
    ],
    3 => [
        'id' => 'Scope 1-2 lengkap dan Scope 3 sebagian tanpa verifikasi.',
        'en' => 'Complete Scope 1 and 2 reporting with partial, unverified Scope 3 emissions.',
    ],
    4 => [
        'id' => 'Inventaris emisi diverifikasi eksternal.',
        'en' => 'The greenhouse gas inventory is externally verified.',
    ],
    5 => [
        'id' => 'Disclosure selaras TCFD/CDP/GHG Protocol dan digunakan untuk target.',
        'en' => 'Disclosure aligns with TCFD, CDP, and the GHG Protocol and is used to support climate targets.',
    ],
],

'D2' => [
    1 => [
        'id' => 'Tidak diukur.',
        'en' => 'Not measured.',
    ],
    2 => [
        'id' => 'Diukur sebagian.',
        'en' => 'Partially measured.',
    ],
    3 => [
        'id' => 'Efisiensi meningkat.',
        'en' => 'Emission efficiency has improved.',
    ],
    4 => [
        'id' => 'Penurunan ≥ 3% per tahun.',
        'en' => 'Emission intensity reduced by at least 3% per year.',
    ],
    5 => [
        'id' => 'Penurunan ≥ 5% per tahun dan diverifikasi.',
        'en' => 'Emission intensity reduced by at least 5% per year and independently verified.',
    ],
],

'D4' => [
    1 => [
        'id' => 'Tidak ada pengukuran kinerja/target.',
        'en' => 'No performance measurement or climate targets.',
    ],
    2 => [
        'id' => 'Pengukuran parsial.',
        'en' => 'Performance is only partially measured.',
    ],
    3 => [
        'id' => 'Target dan data tersedia, tetapi belum konsisten.',
        'en' => 'Targets and data are available but not consistently monitored.',
    ],
    4 => [
        'id' => 'Kinerja dimonitor dan terintegrasi ke keputusan.',
        'en' => 'Performance is monitored and integrated into decision-making.',
    ],
    5 => [
        'id' => 'Target tercapai, diverifikasi dan menjadi benchmark.',
        'en' => 'Targets are achieved, independently verified, and used as benchmarks.',
    ],
],
        'D5' => [
    1 => [
        'id' => 'Tidak ada sistem adaptasi lokal.',
        'en' => 'No local climate adaptation system is in place.',
    ],
    2 => [
        'id' => 'Sistem parsial pada sebagian kecil aset.',
        'en' => 'Adaptation systems are implemented for only a small portion of assets.',
    ],
    3 => [
        'id' => 'Sebagian besar aset kritis memiliki sistem adaptasi.',
        'en' => 'Most critical assets are equipped with adaptation systems.',
    ],
    4 => [
        'id' => 'Seluruh aset vital memiliki sistem drainase, cadangan energi atau SOP adaptasi.',
        'en' => 'All critical assets have drainage systems, backup energy, or climate adaptation procedures.',
    ],
    5 => [
        'id' => 'Sistem adaptasi terintegrasi, diuji berkala dan terbukti menurunkan gangguan layanan.',
        'en' => 'The adaptation system is fully integrated, periodically tested, and proven to reduce service disruptions.',
    ],
],

'D6' => [
    1 => [
        'id' => 'Tidak ada infrastruktur/proyek tahan iklim.',
        'en' => 'No climate-resilient infrastructure or projects.',
    ],
    2 => [
        'id' => 'Proyek adaptasi direncanakan terbatas.',
        'en' => 'Limited climate adaptation projects are planned.',
    ],
    3 => [
        'id' => 'CAPEX adaptasi dialokasikan untuk aset/proyek prioritas.',
        'en' => 'Adaptation CAPEX is allocated to priority assets and projects.',
    ],
    4 => [
        'id' => 'Standar desain infrastruktur resilien diterapkan pada aset utama.',
        'en' => 'Climate-resilient infrastructure design standards are applied to major assets.',
    ],
    5 => [
        'id' => 'Infrastruktur tahan iklim menjadi standar menyeluruh dengan hasil terukur.',
        'en' => 'Climate-resilient infrastructure has become the organization-wide standard with measurable outcomes.',
    ],
],

        'E3' => [
    1 => [
        'id' => 'Tidak ada strategi just transition.',
        'en' => 'No just transition strategy.',
    ],
    2 => [
        'id' => 'Disebut secara umum tanpa program.',
        'en' => 'Mentioned only in general terms without a dedicated program.',
    ],
    3 => [
        'id' => 'Ada program untuk pekerja/kelompok terdampak.',
        'en' => 'Programs are available for affected workers and communities.',
    ],
    4 => [
        'id' => 'Program terkait SDG 8 dan SDG 13 serta kebijakan SDM.',
        'en' => 'Programs are aligned with SDG 8, SDG 13, and human resource policies.',
    ],
    5 => [
        'id' => 'Evaluasi sosial tahunan dan integrasi penuh ke strategi transisi.',
        'en' => 'Annual social impact evaluations are conducted and fully integrated into the transition strategy.',
    ],
],

'E4' => [
    1 => [
        'id' => 'Hanya CSR umum tanpa fokus ketahanan iklim.',
        'en' => 'Only general CSR activities without a climate resilience focus.',
    ],
    2 => [
        'id' => 'Ada proyek adaptasi lokal kecil/ad-hoc.',
        'en' => 'Small or ad hoc local adaptation projects exist.',
    ],
    3 => [
        'id' => 'Program multiyear untuk komunitas rentan.',
        'en' => 'Multi-year programs support vulnerable communities.',
    ],
    4 => [
        'id' => 'Dampak terukur pada air, bencana, kesehatan atau livelihood.',
        'en' => 'Measurable impacts on water, disaster resilience, health, or livelihoods.',
    ],
    5 => [
        'id' => 'Kemitraan publik-swasta dengan hasil terukur dan skalabilitas.',
        'en' => 'Public-private partnerships deliver measurable and scalable outcomes.',
    ],
],

'E5' => [
    1 => [
        'id' => 'Tidak ada mekanisme keluhan/partisipasi.',
        'en' => 'No grievance mechanism or stakeholder participation.',
    ],
    2 => [
        'id' => 'Mekanisme ad-hoc dan tidak terdokumentasi.',
        'en' => 'The mechanism is ad hoc and undocumented.',
    ],
    3 => [
        'id' => 'Sistem formal tersedia dan dapat digunakan pemangku kepentingan.',
        'en' => 'A formal grievance system is available for stakeholders.',
    ],
    4 => [
        'id' => 'Keluhan dianalisis trennya dan ditindaklanjuti.',
        'en' => 'Complaints are analyzed for trends and followed up appropriately.',
    ],
    5 => [
        'id' => 'Sistem terbuka berbasis data publik dengan pelaporan kinerja.',
        'en' => 'An open, data-driven grievance system with public performance reporting is implemented.',
    ],
],

'E6' => [
    1 => [
        'id' => 'Tidak ada kolaborasi.',
        'en' => 'No collaboration.',
    ],
    2 => [
        'id' => 'Kerja sama ad-hoc.',
        'en' => 'Ad hoc collaboration only.',
    ],
    3 => [
        'id' => 'Program kolaboratif tahunan.',
        'en' => 'Annual collaborative programs are implemented.',
    ],
    4 => [
        'id' => 'Kemitraan lintas lembaga/pemerintah.',
        'en' => 'Cross-institutional and government partnerships are established.',
    ],
    5 => [
        'id' => 'Kolaborasi multi-sektor dengan hasil ketahanan wilayah terukur.',
        'en' => 'Multi-sector collaboration delivers measurable regional resilience outcomes.',
    ],
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
        'description_id' => $description['id'],
        'description_en' => $description['en'],
    ]);
}
        }
    }
}
