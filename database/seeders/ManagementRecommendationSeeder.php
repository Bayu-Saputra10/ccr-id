<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ManagementRecommendation;

class ManagementRecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dimensi a
        ManagementRecommendation::create([
            'key' => 'A|Sangat Lemah',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation_id' => 'Prioritaskan pembentukan fondasi tata kelola iklim: tetapkan kebijakan iklim, penanggung jawab formal, mekanisme pelaporan kepada manajemen dan daftar bukti minimum untuk setiap indikator tata kelola.',

    'management_recommendation_en' => 'Prioritize establishing the foundation of climate governance by defining a climate policy, assigning formal responsibilities, implementing reporting mechanisms to management, and preparing minimum evidence requirements for each governance indicator.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Lemah',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation_id' => 'Perkuat struktur tata kelola iklim dengan menetapkan peran lintas fungsi, memperjelas akuntabilitas manajemen dan memastikan isu iklim mulai masuk dalam agenda rapat serta proses pengawasan.',

    'management_recommendation_en' => 'Strengthen the climate governance structure by defining cross-functional roles, clarifying management accountability, and ensuring climate issues become part of management meetings and oversight processes.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Sedang',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation_id' => 'Tingkatkan integrasi tata kelola iklim ke dalam proses pengambilan keputusan melalui pelaporan berkala, koordinasi antar unit dan dokumentasi bukti implementasi yang lebih konsisten.',

    'management_recommendation_en' => 'Enhance the integration of climate governance into decision-making processes through regular reporting, cross-functional coordination, and more consistent documentation of implementation evidence.',

    'action_focus_id' => 'Perkuat integrasi',

    'action_focus_en' => 'Strengthen Integration',
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Baik',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation_id' => 'Perkuat konsistensi pelaksanaan tata kelola iklim melalui peningkatan pelaporan kepada manajemen puncak, penguatan akuntabilitas unit kerja dan perluasan pengawasan terhadap risiko serta peluang iklim.',

    'management_recommendation_en' => 'Improve the consistency of climate governance implementation through enhanced reporting to senior management, stronger departmental accountability, and broader oversight of climate-related risks and opportunities.',

    'action_focus_id' => 'Optimalkan implementasi',

    'action_focus_en' => 'Optimize Implementation',
        ]);
        ManagementRecommendation::create([
            'key' => 'A|Sangat Baik',
            'dimension' => 'A',
            'dimension_name' => 'Tata Kelola & Kepemimpinan Iklim',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation_id' => 'Pertahankan mekanisme tata kelola iklim yang telah kuat dan dorong integrasi lebih lanjut ke keputusan investasi, manajemen risiko, evaluasi kinerja manajemen dan praktik benchmarking eksternal.',

    'management_recommendation_en' => 'Maintain the established climate governance mechanisms and further integrate them into investment decisions, risk management, management performance evaluation, and external benchmarking practices.',

    'action_focus_id' => 'Pertahankan dan tingkatkan',

    'action_focus_en' => 'Maintain and Enhance',
        ]);
        
        // dimensi b
        ManagementRecommendation::create([
            'key' => 'B|Sangat Lemah',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation_id' => 'Mulai integrasikan isu perubahan iklim ke dalam perencanaan bisnis dasar melalui identifikasi risiko utama, peluang adaptasi dan dampaknya terhadap model bisnis perusahaan.',

    'management_recommendation_en' => 'Begin integrating climate change considerations into core business planning by identifying key climate risks, adaptation opportunities, and their potential impacts on the company’s business model.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Lemah',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation_id' => 'Susun arah awal strategi ketahanan iklim dengan memetakan risiko dan peluang iklim, menautkannya ke rencana bisnis, serta menetapkan langkah transisi yang realistis.',

    'management_recommendation_en' => 'Develop an initial climate resilience strategy by mapping climate-related risks and opportunities, linking them to business plans, and defining realistic transition actions.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Sedang',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation_id' => 'Kembangkan roadmap ketahanan iklim yang lebih terstruktur, termasuk prioritas adaptasi, mitigasi, peluang bisnis rendah karbon dan keterkaitannya dengan tujuan jangka menengah perusahaan.',

    'management_recommendation_en' => 'Develop a more structured climate resilience roadmap, including adaptation priorities, mitigation initiatives, low-carbon business opportunities, and alignment with the company’s medium-term objectives.',

    'action_focus_id' => 'Perkuat integrasi',

    'action_focus_en' => 'Strengthen Integration',
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Baik',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation_id' => 'Perkuat integrasi risiko dan peluang iklim ke dalam perencanaan strategis, keputusan investasi, pengembangan produk atau layanan, serta evaluasi ketahanan model bisnis secara periodik.',

    'management_recommendation_en' => 'Further integrate climate-related risks and opportunities into strategic planning, investment decisions, product and service development, and periodic evaluations of business model resilience.',

    'action_focus_id' => 'Optimalkan implementasi',

    'action_focus_en' => 'Optimize Implementation',
        ]);
        ManagementRecommendation::create([
            'key' => 'B|Sangat Baik',
            'dimension' => 'B',
            'dimension_name' => 'Strategi & Resiliensi Model Bisnis',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation_id' => 'Fokus pada penyempurnaan strategi ketahanan iklim melalui scenario analysis, evaluasi berkala ketahanan model bisnis, inovasi rendah karbon dan integrasi strategi iklim ke portofolio investasi.',

    'management_recommendation_en' => 'Focus on enhancing the climate resilience strategy through scenario analysis, regular business resilience assessments, low-carbon innovation, and deeper integration of climate strategy into the investment portfolio.',

    'action_focus_id' => 'Pertahankan dan tingkatkan',

    'action_focus_en' => 'Maintain and Enhance',
        ]);

        // dimensi c
        ManagementRecommendation::create([
            'key' => 'C|Sangat Lemah',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation_id' => 'Bangun proses dasar identifikasi dan penilaian risiko iklim, termasuk pemetaan risiko fisik dan transisi, penetapan risk owner, serta dokumentasi awal dalam sistem manajemen risiko.',

    'management_recommendation_en' => 'Establish fundamental processes for identifying and assessing climate-related risks, including mapping physical and transition risks, assigning risk owners, and documenting them within the organization’s risk management system.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Lemah',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation_id' => 'Perkuat kerangka awal pengelolaan risiko iklim dengan memasukkan risiko iklim ke risk register, menetapkan parameter penilaian dan mulai melakukan pemantauan berkala.',

    'management_recommendation_en' => 'Strengthen the initial climate risk management framework by incorporating climate risks into the risk register, establishing assessment criteria, and implementing regular monitoring activities.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Sedang',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation_id' => 'Integrasikan risiko iklim ke dalam kerangka ERM perusahaan, termasuk proses identifikasi, pengukuran, mitigasi, pemantauan dan pelaporan risiko kepada manajemen.',

    'management_recommendation_en' => 'Integrate climate-related risks into the company’s Enterprise Risk Management (ERM) framework, covering risk identification, measurement, mitigation, monitoring, and reporting to management.',

    'action_focus_id' => 'Perkuat integrasi',

    'action_focus_en' => 'Strengthen Integration',
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Baik',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation_id' => 'Tingkatkan kualitas identifikasi, pengukuran, dan evaluasi risiko iklim melalui indikator risiko yang lebih jelas, pembaruan berkala dan keterkaitan dengan keputusan operasional maupun investasi.',

    'management_recommendation_en' => 'Enhance the quality of climate risk identification, measurement, and evaluation by using clearer risk indicators, conducting regular updates, and linking risk assessments to operational and investment decisions.',

    'action_focus_id' => 'Optimalkan implementasi',

    'action_focus_en' => 'Optimize Implementation',
        ]);
        ManagementRecommendation::create([
            'key' => 'C|Sangat Baik',
            'dimension' => 'C',
            'dimension_name' => 'Manajemen Risiko Iklim Terintegrasi',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation_id' => 'Pertahankan sistem manajemen risiko iklim yang telah terintegrasi dan tingkatkan ketajaman analisis melalui stress testing, scenario analysis, early warning indicators dan review independen.',

    'management_recommendation_en' => 'Maintain the integrated climate risk management system and further strengthen analytical capabilities through climate stress testing, scenario analysis, early warning indicators, and independent reviews.',

    'action_focus_id' => 'Pertahankan dan tingkatkan',

    'action_focus_en' => 'Maintain and Enhance',
        ]);

        // dimensi d
        ManagementRecommendation::create([
            'key' => 'D|Sangat Lemah',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation_id' => 'Tetapkan baseline, indikator kinerja, dan target dasar terkait ketahanan iklim sebagai fondasi pengukuran, pemantauan dan pelaporan kemajuan perusahaan.',

    'management_recommendation_en' => 'Establish baseline data, performance indicators, and fundamental climate resilience targets as the foundation for measuring, monitoring, and reporting the organization’s progress.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Lemah',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation_id' => 'Kembangkan target iklim awal yang lebih jelas, lengkapi dengan baseline data, unit penanggung jawab, jadwal pemantauan dan mekanisme dokumentasi capaian.',

    'management_recommendation_en' => 'Develop clearer initial climate targets supported by baseline data, designated responsible units, monitoring schedules, and documented performance tracking mechanisms.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Sedang',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation_id' => 'Perkuat target ketahanan iklim dengan indikator yang lebih terukur, mekanisme monitoring yang konsisten, serta evaluasi berkala terhadap capaian dan gap implementasi.',

    'management_recommendation_en' => 'Strengthen climate resilience targets by establishing measurable indicators, implementing consistent monitoring mechanisms, and conducting periodic evaluations of performance achievements and implementation gaps.',

    'action_focus_id' => 'Perkuat integrasi',

    'action_focus_en' => 'Strengthen Integration',
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Baik',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation_id' => 'Perkuat monitoring dan evaluasi capaian target melalui KPI yang terdokumentasi, data yang lebih konsisten dan keterkaitan hasil kinerja dengan proses pengambilan keputusan.',

    'management_recommendation_en' => 'Enhance the monitoring and evaluation of climate targets through well-documented KPIs, more consistent data management, and stronger integration of performance results into decision-making processes.',

    'action_focus_id' => 'Optimalkan implementasi',

    'action_focus_en' => 'Optimize Implementation',
        ]);
        ManagementRecommendation::create([
            'key' => 'D|Sangat Baik',
            'dimension' => 'D',
            'dimension_name' => 'Kinerja & Target Terukur',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation_id' => 'Pertahankan sistem pengukuran kinerja yang telah berjalan dan tingkatkan transparansi pelaporan, verifikasi data, evaluasi capaian target, serta pembelajaran berkelanjutan.',

    'management_recommendation_en' => 'Maintain the established performance measurement system while further improving reporting transparency, data verification, target achievement evaluation, and continuous organizational learning.',

    'action_focus_id' => 'Pertahankan dan tingkatkan',

    'action_focus_en' => 'Maintain and Enhance',
        ]);

        // dimensi e
        ManagementRecommendation::create([
            'key' => 'E|Sangat Lemah',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Sangat Lemah',
            'score_min' => 0,
            'score_max' => 1,
            'management_recommendation_id' => 'Mulai bangun mekanisme dasar keterlibatan pemasok, pekerja, komunitas dan pemangku kepentingan terkait risiko iklim yang memengaruhi rantai nilai dan aspek sosial.',

    'management_recommendation_en' => 'Establish fundamental mechanisms for engaging suppliers, employees, communities, and other stakeholders in addressing climate-related risks affecting the value chain and social resilience.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Lemah',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Lemah',
            'score_min' => 1.00001,
            'score_max' => 2,
            'management_recommendation_id' => 'Perkuat pemetaan risiko sosial dan rantai nilai dengan mengidentifikasi pemasok, mitra, komunitas terdampak, serta potensi gangguan iklim terhadap operasi dan layanan.',

    'management_recommendation_en' => 'Strengthen social and value chain risk mapping by identifying suppliers, business partners, affected communities, and potential climate-related disruptions to operations and services.',

    'action_focus_id' => 'Bangun fondasi',

    'action_focus_en' => 'Build the Foundation',
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Sedang',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Sedang',
            'score_min' => 2.00001,
            'score_max' => 3,
            'management_recommendation_id' => 'Perluas identifikasi risiko dan ketergantungan rantai nilai terhadap perubahan iklim, serta mulai integrasikan hasilnya ke dalam pengelolaan pemasok dan hubungan pemangku kepentingan.',

    'management_recommendation_en' => 'Expand the assessment of climate-related risks and value chain dependencies, and integrate the results into supplier management and stakeholder engagement practices.',

    'action_focus_id' => 'Perkuat integrasi',

    'action_focus_en' => 'Strengthen Integration',
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Baik',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Baik',
            'score_min' => 3.00001,
            'score_max' => 4,
            'management_recommendation_id' => 'Tingkatkan integrasi ketahanan iklim ke dalam pengelolaan pemasok, pekerja, komunitas, dan pemangku kepentingan melalui standar, evaluasi, pelatihan dan mekanisme umpan balik.',

    'management_recommendation_en' => 'Enhance the integration of climate resilience into supplier, workforce, community, and stakeholder management through standards, performance evaluations, training programs, and structured feedback mechanisms.',

    'action_focus_id' => 'Optimalkan implementasi',

    'action_focus_en' => 'Optimize Implementation',
        ]);
        ManagementRecommendation::create([
            'key' => 'E|Sangat Baik',
            'dimension' => 'E',
            'dimension_name' => 'Resiliensi Sosial & Rantai Nilai',
            'category' => 'Sangat Baik',
            'score_min' => 4.00001,
            'score_max' => 5,
            'management_recommendation_id' => 'Pertahankan keterlibatan pemangku kepentingan dan pemasok dalam strategi ketahanan iklim, serta dorong kolaborasi, inovasi dan pembelajaran bersama di sepanjang rantai nilai.',

    'management_recommendation_en' => 'Maintain strong engagement with stakeholders and suppliers in implementing the climate resilience strategy while fostering collaboration, innovation, and continuous learning throughout the value chain.',

    'action_focus_id' => 'Pertahankan dan tingkatkan',

    'action_focus_en' => 'Maintain and Enhance',
        ]);
    }
}
