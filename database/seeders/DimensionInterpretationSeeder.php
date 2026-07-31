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
    'category_id' => 'Sangat Lemah',
'category_en' => 'Very Poor',

    'automatic_interpretation_id' => 'Tata kelola dan kepemimpinan iklim belum terbentuk secara memadai. Perusahaan belum menunjukkan struktur, kebijakan, atau mekanisme pengawasan yang cukup untuk mengarahkan agenda ketahanan iklim.',

    'automatic_interpretation_en' => 'Climate governance and leadership have not yet been adequately established. The organization has not demonstrated sufficient governance structures, policies, or oversight mechanisms to effectively guide its climate resilience agenda.',

    'short_recommendation_id' => 'Bangun struktur tata kelola iklim dasar, tetapkan penanggung jawab, dan mulai dokumentasikan kebijakan iklim.',

    'short_recommendation_en' => 'Establish a basic climate governance structure, assign responsible personnel, and begin documenting climate-related policies.',
]);

DimensionInterpretation::create([
    'key' => 'A|Lemah',
    'dimension' => 'A',
    'dimension_name' => 'Tata Kelola & Kepemimpinan',
    'score_min' => 1.01,
    'score_max' => 2,
    'category_id' => 'Lemah',
'category_en' => 'Poor',

    'automatic_interpretation_id' => 'Tata kelola iklim mulai dikenali, tetapi masih terbatas pada komitmen awal dan belum didukung peran, tanggung jawab, serta bukti pengawasan yang konsisten.',

    'automatic_interpretation_en' => 'Climate governance has begun to emerge, but it remains limited to initial commitments and is not yet supported by clearly defined roles, responsibilities, or consistent oversight practices.',

    'short_recommendation_id' => 'Perjelas peran manajemen, mekanisme pengawasan dan bukti pelaksanaan tata kelola iklim.',

    'short_recommendation_en' => 'Clarify management responsibilities, strengthen oversight mechanisms, and improve documentation of climate governance implementation.',
]);

DimensionInterpretation::create([
    'key' => 'A|Sedang',
    'dimension' => 'A',
    'dimension_name' => 'Tata Kelola & Kepemimpinan',
    'score_min' => 2.01,
    'score_max' => 3,
    'category_id' => 'Sedang',
'category_en' => 'Moderate',

    'automatic_interpretation_id' => 'Tata kelola iklim telah mulai dikembangkan, namun penerapannya masih parsial. Perusahaan perlu memperjelas akuntabilitas, peran manajemen dan mekanisme pemantauan isu iklim.',

    'automatic_interpretation_en' => 'Climate governance has been developed to some extent; however, its implementation remains partial. The organization should strengthen accountability, clarify management responsibilities, and improve climate-related monitoring mechanisms.',

    'short_recommendation_id' => 'Integrasikan tata kelola iklim ke rapat manajemen, pelaporan berkala dan proses pengambilan keputusan.',

    'short_recommendation_en' => 'Integrate climate governance into management meetings, regular reporting processes, and organizational decision-making.',
]);

DimensionInterpretation::create([
    'key' => 'A|Baik',
    'dimension' => 'A',
    'dimension_name' => 'Tata Kelola & Kepemimpinan',
    'score_min' => 3.01,
    'score_max' => 4,
    'category_id' => 'Baik',
'category_en' => 'Good',

    'automatic_interpretation_id' => 'Tata kelola dan kepemimpinan iklim sudah berjalan cukup kuat. Penguatan masih diperlukan pada konsistensi bukti, keterlibatan lintas fungsi dan integrasi keputusan iklim ke proses manajemen utama.',

    'automatic_interpretation_en' => 'Climate governance and leadership are well established. Further improvements should focus on maintaining consistent evidence, enhancing cross-functional engagement, and strengthening the integration of climate considerations into key management processes.',

    'short_recommendation_id' => 'Perkuat konsistensi bukti, koordinasi lintas fungsi dan keterkaitan tata kelola iklim dengan strategi perusahaan.',

    'short_recommendation_en' => 'Improve evidence consistency, strengthen cross-functional coordination, and align climate governance more closely with the organization’s business strategy.',
]);

DimensionInterpretation::create([
    'key' => 'A|Sangat Baik',
    'dimension' => 'A',
    'dimension_name' => 'Tata Kelola & Kepemimpinan',
    'score_min' => 4.01,
    'score_max' => 5,
    'category_id' => 'Sangat Baik',
'category_en' => 'Excellent',

    'automatic_interpretation_id' => 'Tata kelola dan kepemimpinan iklim telah menunjukkan kualitas sangat baik. Struktur pengawasan, komitmen manajemen dan mekanisme pengambilan keputusan terkait iklim telah terbangun kuat dan terdokumentasi.',

    'automatic_interpretation_en' => 'Climate governance and leadership demonstrate a high level of maturity. Governance structures, management commitment, and climate-related decision-making processes are well established, effectively implemented, and comprehensively documented.',

    'short_recommendation_id' => 'Pertahankan praktik tata kelola yang kuat dan gunakan hasil penilaian untuk peningkatan berkelanjutan.',

    'short_recommendation_en' => 'Maintain strong governance practices and use assessment results to support continuous improvement.',
]);
        
        // dimensi b
        DimensionInterpretation::create([
    'key' => 'B|Sangat Lemah',
    'dimension' => 'B',
    'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
    'score_min' => 0,
    'score_max' => 1,
    'category_id' => 'Sangat Lemah',
'category_en' => 'Very Poor',

    'automatic_interpretation_id' => 'Strategi bisnis belum menunjukkan keterkaitan yang jelas dengan risiko dan peluang perubahan iklim. Ketahanan iklim belum menjadi bagian dari arah pengembangan model bisnis.',

    'automatic_interpretation_en' => 'The business strategy does not yet demonstrate a clear connection to climate-related risks and opportunities. Climate resilience has not yet been incorporated into the organization’s business model development.',

    'short_recommendation_id' => 'Mulai petakan dampak risiko dan peluang iklim terhadap model bisnis dan rencana strategis.',

    'short_recommendation_en' => 'Begin assessing the impacts of climate-related risks and opportunities on the business model and strategic planning.',
]);

DimensionInterpretation::create([
    'key' => 'B|Lemah',
    'dimension' => 'B',
    'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
    'score_min' => 1.01,
    'score_max' => 2,
    'category_id' => 'Lemah',
'category_en' => 'Poor',

    'automatic_interpretation_id' => 'Pertimbangan iklim mulai muncul dalam strategi perusahaan, tetapi masih bersifat umum dan belum terhubung dengan rencana bisnis, investasi, atau penyesuaian model bisnis.',

    'automatic_interpretation_en' => 'Climate considerations have begun to appear in the organization’s strategy, but they remain general and are not yet linked to business planning, investment decisions, or business model adaptation.',

    'short_recommendation_id' => 'Hubungkan isu iklim dengan prioritas bisnis, investasi dan rencana adaptasi awal.',

    'short_recommendation_en' => 'Integrate climate-related issues into business priorities, investment planning, and initial adaptation strategies.',
]);

DimensionInterpretation::create([
    'key' => 'B|Sedang',
    'dimension' => 'B',
    'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
    'score_min' => 2.01,
    'score_max' => 3,
    'category_id' => 'Sedang',
'category_en' => 'Moderate',

    'automatic_interpretation_id' => 'Strategi ketahanan iklim telah mulai dikembangkan, namun integrasinya ke model bisnis masih terbatas. Perusahaan perlu memperkuat hubungan antara risiko iklim, peluang pasar dan keputusan strategis.',

    'automatic_interpretation_en' => 'A climate resilience strategy has been established; however, its integration into the business model remains limited. The organization should strengthen the connection between climate risks, market opportunities, and strategic decision-making.',

    'short_recommendation_id' => 'Perkuat roadmap strategi iklim, skenario bisnis dan rencana penyesuaian model bisnis.',

    'short_recommendation_en' => 'Strengthen the climate strategy roadmap, business scenario analysis, and business model adaptation planning.',
]);

DimensionInterpretation::create([
    'key' => 'B|Baik',
    'dimension' => 'B',
    'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
    'score_min' => 3.01,
    'score_max' => 4,
    'category_id' => 'Baik',
'category_en' => 'Good',

    'automatic_interpretation_id' => 'Strategi dan resiliensi model bisnis sudah cukup kuat. Perusahaan telah mulai mengaitkan isu iklim dengan arah bisnis, tetapi masih perlu memperkuat skenario, prioritas investasi dan roadmap implementasi.',

    'automatic_interpretation_en' => 'The organization demonstrates a solid business strategy and resilience framework. Climate-related considerations are incorporated into strategic direction, although further improvements are needed in scenario analysis, investment prioritization, and implementation roadmaps.',

    'short_recommendation_id' => 'Perdalam penggunaan skenario, prioritas investasi dan indikator implementasi strategi iklim.',

    'short_recommendation_en' => 'Enhance scenario analysis, investment prioritization, and implementation indicators for the climate strategy.',
]);

DimensionInterpretation::create([
    'key' => 'B|Sangat Baik',
    'dimension' => 'B',
    'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
    'score_min' => 4.01,
    'score_max' => 5,
    'category_id' => 'Sangat Baik',
'category_en' => 'Excellent',

    'automatic_interpretation_id' => 'Perusahaan menunjukkan integrasi strategi iklim yang sangat baik ke dalam model bisnis. Risiko dan peluang iklim telah dipertimbangkan dalam arah strategis, transformasi bisnis dan prioritas pengembangan jangka panjang.',

    'automatic_interpretation_en' => 'The organization demonstrates an excellent integration of climate strategy into its business model. Climate-related risks and opportunities are embedded within strategic direction, business transformation initiatives, and long-term development priorities.',

    'short_recommendation_id' => 'Pertahankan integrasi strategi iklim dan gunakan sebagai dasar inovasi serta transformasi bisnis.',

    'short_recommendation_en' => 'Maintain the integration of climate strategy and leverage it as a foundation for innovation and long-term business transformation.',
]);

        // dimensi c
        DimensionInterpretation::create([
    'key' => 'C|Sangat Lemah',
    'dimension' => 'C',
    'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
    'score_min' => 0,
    'score_max' => 1,
    'category_id' => 'Sangat Lemah',
'category_en' => 'Very Poor',

    'automatic_interpretation_id' => 'Manajemen risiko iklim belum terbentuk. Risiko fisik maupun transisi belum diidentifikasi secara memadai dan belum masuk dalam sistem manajemen risiko perusahaan.',

    'automatic_interpretation_en' => 'Climate risk management has not yet been established. Neither physical nor transition risks have been adequately identified or incorporated into the organization’s enterprise risk management system.',

    'short_recommendation_id' => 'Mulai identifikasi risiko fisik dan transisi serta masukkan ke daftar risiko utama perusahaan.',

    'short_recommendation_en' => 'Begin identifying physical and transition climate risks and incorporate them into the organization’s key risk register.',
]);

DimensionInterpretation::create([
    'key' => 'C|Lemah',
    'dimension' => 'C',
    'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
    'score_min' => 1.01,
    'score_max' => 2,
    'category_id' => 'Lemah',
'category_en' => 'Poor',

    'automatic_interpretation_id' => 'Risiko iklim mulai dikenali, tetapi proses identifikasi, penilaian dan mitigasinya masih terbatas. Pengelolaan risiko belum terintegrasi dengan kerangka manajemen risiko utama.',

    'automatic_interpretation_en' => 'Climate-related risks have begun to be recognized; however, risk identification, assessment, and mitigation processes remain limited. Climate risk management has not yet been integrated into the organization’s primary risk management framework.',

    'short_recommendation_id' => 'Bangun proses penilaian risiko iklim dan tetapkan rencana mitigasi awal.',

    'short_recommendation_en' => 'Develop a structured climate risk assessment process and establish initial mitigation plans.',
]);

DimensionInterpretation::create([
    'key' => 'C|Sedang',
    'dimension' => 'C',
    'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
    'score_min' => 2.01,
    'score_max' => 3,
    'category_id' => 'Sedang',
'category_en' => 'Moderate',

    'automatic_interpretation_id' => 'Manajemen risiko iklim telah mulai berjalan, namun masih memerlukan penguatan pada metodologi penilaian, dokumentasi bukti dan integrasi dengan enterprise risk management.',

    'automatic_interpretation_en' => 'Climate risk management practices have been established; however, improvements are still needed in assessment methodologies, evidence documentation, and integration with the Enterprise Risk Management (ERM) framework.',

    'short_recommendation_id' => 'Integrasikan risiko iklim ke ERM, monitoring dan pelaporan risiko perusahaan.',

    'short_recommendation_en' => 'Integrate climate-related risks into the Enterprise Risk Management (ERM) framework, including monitoring and corporate risk reporting.',
]);

DimensionInterpretation::create([
    'key' => 'C|Baik',
    'dimension' => 'C',
    'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
    'score_min' => 3.01,
    'score_max' => 4,
    'category_id' => 'Baik',
'category_en' => 'Good',

    'automatic_interpretation_id' => 'Manajemen risiko iklim sudah cukup kuat dan mulai terintegrasi dalam sistem risiko perusahaan. Penguatan masih diperlukan pada pemantauan berkala, pengukuran dampak dan tindak lanjut mitigasi.',

    'automatic_interpretation_en' => 'Climate risk management is well established and increasingly integrated into the organization’s risk management system. Further improvements should focus on continuous monitoring, impact assessment, and mitigation follow-up.',

    'short_recommendation_id' => 'Perkuat pengukuran dampak, stress testing dan evaluasi tindak lanjut mitigasi.',

    'short_recommendation_en' => 'Strengthen impact assessments, climate stress testing, and the evaluation of mitigation actions.',
]);

DimensionInterpretation::create([
    'key' => 'C|Sangat Baik',
    'dimension' => 'C',
    'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
    'score_min' => 4.01,
    'score_max' => 5,
    'category_id' => 'Sangat Baik',
'category_en' => 'Excellent',

    'automatic_interpretation_id' => 'Sistem manajemen risiko iklim telah berjalan sangat baik. Risiko fisik dan transisi telah diidentifikasi, dinilai, dipantau dan diintegrasikan ke dalam proses manajemen risiko perusahaan.',

    'automatic_interpretation_en' => 'The organization demonstrates a highly mature climate risk management system. Physical and transition risks are systematically identified, assessed, monitored, and fully integrated into enterprise risk management processes.',

    'short_recommendation_id' => 'Pertahankan sistem risiko terintegrasi dan tingkatkan kualitas analisis skenario serta pemantauan.',

    'short_recommendation_en' => 'Maintain the integrated climate risk management system while continuously enhancing scenario analysis and ongoing monitoring capabilities.',
]);

        // dimensi d
        DimensionInterpretation::create([
    'key' => 'D|Sangat Lemah',
    'dimension' => 'D',
    'dimension_name' => 'Kinerja & Target Terukur',
    'score_min' => 0,
    'score_max' => 1,
    'category_id' => 'Sangat Lemah',
'category_en' => 'Very Poor',

    'automatic_interpretation_id' => 'Kinerja dan target ketahanan iklim belum tersedia secara memadai. Perusahaan belum memiliki indikator, baseline, atau target terukur yang dapat digunakan untuk memantau kemajuan.',

    'automatic_interpretation_en' => 'Climate resilience performance and measurable targets have not yet been adequately established. The organization lacks baseline data, performance indicators, and measurable targets to effectively monitor progress.',

    'short_recommendation_id' => 'Tetapkan baseline, indikator kinerja dan target awal terkait ketahanan iklim.',

    'short_recommendation_en' => 'Establish baseline data, performance indicators, and initial climate resilience targets.',
]);

DimensionInterpretation::create([
    'key' => 'D|Lemah',
    'dimension' => 'D',
    'dimension_name' => 'Kinerja & Target Terukur',
    'score_min' => 1.01,
    'score_max' => 2,
    'category_id' => 'Lemah',
'category_en' => 'Poor',

    'automatic_interpretation_id' => 'Target dan indikator kinerja iklim mulai tersedia, tetapi masih terbatas, belum konsisten dan belum cukup kuat untuk menilai capaian ketahanan iklim secara berkala.',

    'automatic_interpretation_en' => 'Climate-related targets and performance indicators have been introduced, but they remain limited, inconsistent, and insufficient to effectively evaluate climate resilience performance over time.',

    'short_recommendation_id' => 'Perkuat kelengkapan KPI, metode pengukuran dan dokumentasi capaian.',

    'short_recommendation_en' => 'Strengthen the completeness of KPIs, measurement methodologies, and performance documentation.',
]);

DimensionInterpretation::create([
    'key' => 'D|Sedang',
    'dimension' => 'D',
    'dimension_name' => 'Kinerja & Target Terukur',
    'score_min' => 2.01,
    'score_max' => 3,
    'category_id' => 'Sedang',
'category_en' => 'Moderate',

    'automatic_interpretation_id' => 'Kinerja dan target iklim telah mulai dikembangkan, namun masih memerlukan penguatan pada baseline, ukuran capaian, konsistensi pemantauan dan pelaporan hasil.',

    'automatic_interpretation_en' => 'Climate-related performance and targets have been established; however, further improvements are required in baseline development, performance measurement, monitoring consistency, and reporting practices.',

    'short_recommendation_id' => 'Bangun sistem monitoring berkala, validasi data dan pelaporan target iklim.',

    'short_recommendation_en' => 'Develop a structured monitoring system, strengthen data validation, and improve climate target reporting.',
]);

DimensionInterpretation::create([
    'key' => 'D|Baik',
    'dimension' => 'D',
    'dimension_name' => 'Kinerja & Target Terukur',
    'score_min' => 3.01,
    'score_max' => 4,
    'category_id' => 'Baik',
'category_en' => 'Good',

    'automatic_interpretation_id' => 'Kinerja dan target terukur sudah cukup kuat. Perusahaan telah memiliki indikator dan target, tetapi masih perlu memperkuat validasi data, konsistensi monitoring dan keterkaitan dengan keputusan manajerial.',

    'automatic_interpretation_en' => 'Climate-related performance measurement and targets are well established. The organization has defined indicators and targets, although improvements are still needed in data validation, monitoring consistency, and integration with management decision-making.',

    'short_recommendation_id' => 'Perkuat validasi data, konsistensi evaluasi dan keterkaitan target dengan keputusan manajemen.',

    'short_recommendation_en' => 'Strengthen data validation, improve evaluation consistency, and align climate targets with management decision-making.',
]);

DimensionInterpretation::create([
    'key' => 'D|Sangat Baik',
    'dimension' => 'D',
    'dimension_name' => 'Kinerja & Target Terukur',
    'score_min' => 4.01,
    'score_max' => 5,
    'category_id' => 'Sangat Baik',
'category_en' => 'Excellent',

    'automatic_interpretation_id' => 'Perusahaan menunjukkan kinerja dan target ketahanan iklim yang sangat baik. Indikator, baseline, target, pemantauan dan pelaporan capaian telah tersedia dan digunakan secara konsisten.',

    'automatic_interpretation_en' => 'The organization demonstrates an excellent level of climate resilience performance management. Performance indicators, baseline data, measurable targets, monitoring processes, and reporting practices are well established and consistently applied.',

    'short_recommendation_id' => 'Pertahankan kualitas pengukuran dan gunakan capaian target sebagai dasar peningkatan kinerja.',

    'short_recommendation_en' => 'Maintain high-quality performance measurement practices and use achievement results to drive continuous improvement.',
]);

        // dimensi e
        DimensionInterpretation::create([
    'key' => 'E|Sangat Lemah',
    'dimension' => 'E',
    'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
    'score_min' => 0,
    'score_max' => 1,
    'category_id' => 'Sangat Lemah',
'category_en' => 'Very Poor',

    'automatic_interpretation_id' => 'Resiliensi sosial dan rantai nilai belum menjadi bagian dari penilaian ketahanan iklim. Perusahaan belum menunjukkan bukti pelibatan pemasok, mitra, pekerja, atau komunitas dalam agenda resiliensi.',

    'automatic_interpretation_en' => 'Social resilience and value chain resilience have not yet been incorporated into the organization’s climate resilience assessment. There is limited evidence of engagement with suppliers, business partners, employees, or local communities in climate resilience initiatives.',

    'short_recommendation_id' => 'Mulai identifikasi pemasok, mitra, pekerja dan komunitas yang relevan dengan risiko iklim.',

    'short_recommendation_en' => 'Identify suppliers, business partners, employees, and communities that are exposed to climate-related risks.',
]);

DimensionInterpretation::create([
    'key' => 'E|Lemah',
    'dimension' => 'E',
    'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
    'score_min' => 1.01,
    'score_max' => 2,
    'category_id' => 'Lemah',
'category_en' => 'Poor',

    'automatic_interpretation_id' => 'Aspek sosial dan rantai nilai mulai diperhatikan, tetapi masih terbatas pada inisiatif awal. Keterlibatan pemasok, mitra dan pemangku kepentingan belum berjalan secara sistematis.',

    'automatic_interpretation_en' => 'Social and value chain considerations have begun to receive attention, but efforts remain limited to initial initiatives. Engagement with suppliers, business partners, and key stakeholders is not yet systematic.',

    'short_recommendation_id' => 'Bangun mekanisme pelibatan awal untuk pemasok, mitra dan pemangku kepentingan terdampak.',

    'short_recommendation_en' => 'Develop structured engagement mechanisms for suppliers, business partners, and affected stakeholders.',
]);

DimensionInterpretation::create([
    'key' => 'E|Sedang',
    'dimension' => 'E',
    'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
    'score_min' => 2.01,
    'score_max' => 3,
    'category_id' => 'Sedang',
'category_en' => 'Moderate',

    'automatic_interpretation_id' => 'Resiliensi sosial dan rantai nilai telah mulai dikembangkan, namun integrasinya masih parsial. Perusahaan perlu memperkuat pemetaan risiko rantai pasok, keterlibatan pemangku kepentingan dan dukungan adaptasi.',

    'automatic_interpretation_en' => 'Social and value chain resilience initiatives have been established; however, their integration remains partial. The organization should strengthen supply chain risk assessments, stakeholder engagement, and climate adaptation support.',

    'short_recommendation_id' => 'Perkuat pemetaan risiko rantai nilai, program kolaborasi dan dukungan adaptasi sosial.',

    'short_recommendation_en' => 'Strengthen value chain risk assessments, collaborative programs, and social adaptation initiatives.',
]);

DimensionInterpretation::create([
    'key' => 'E|Baik',
    'dimension' => 'E',
    'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
    'score_min' => 3.01,
    'score_max' => 4,
    'category_id' => 'Baik',
'category_en' => 'Good',

    'automatic_interpretation_id' => 'Resiliensi sosial dan rantai nilai sudah cukup kuat. Penguatan masih diperlukan pada perluasan cakupan pemasok, mekanisme kolaborasi, serta konsistensi bukti dukungan terhadap komunitas dan mitra terdampak.',

    'automatic_interpretation_en' => 'Social and value chain resilience are well established. Further improvements should focus on expanding supplier coverage, strengthening collaboration mechanisms, and maintaining consistent evidence of support for affected communities and business partners.',

    'short_recommendation_id' => 'Perluas cakupan pemasok dan mitra, serta dokumentasikan bukti kolaborasi ketahanan iklim.',

    'short_recommendation_en' => 'Expand supplier and business partner engagement while maintaining documented evidence of climate resilience collaboration.',
]);

DimensionInterpretation::create([
    'key' => 'E|Sangat Baik',
    'dimension' => 'E',
    'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
    'score_min' => 4.01,
    'score_max' => 5,
    'category_id' => 'Sangat Baik',
'category_en' => 'Excellent',

    'automatic_interpretation_id' => 'Perusahaan menunjukkan resiliensi sosial dan rantai nilai yang sangat baik. Risiko iklim pada pemasok, mitra, pekerja dan komunitas telah diperhatikan dalam strategi ketahanan iklim perusahaan.',

    'automatic_interpretation_en' => 'The organization demonstrates an excellent level of social and value chain resilience. Climate-related risks affecting suppliers, business partners, employees, and local communities are fully considered within the organization’s climate resilience strategy.',

    'short_recommendation_id' => 'Pertahankan kolaborasi rantai nilai dan gunakan sebagai keunggulan resiliensi perusahaan.',

    'short_recommendation_en' => 'Maintain strong value chain collaboration and leverage it as a strategic advantage for organizational climate resilience.',
]);
    }
}
