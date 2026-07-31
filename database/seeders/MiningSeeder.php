<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mining;

class MiningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mining::insert([

        // dimensi a
        [
    'dimension' => 'A',
    'indicator_id' => 'A1',
    'indicator_name_id' => 'Pengawasan dewan direksi terhadap isu iklim',
    'indicator_name_en' => 'Board Oversight of Climate Issues',
    'definition_id' => 'Mengukur tingkat keterlibatan dan pengawasan dewan direksi dalam pengambilan keputusan terkait risiko, peluang, strategi, target dan kinerja iklim perusahaan.',
    'definition_en' => 'Measures the level of board involvement and oversight in decision-making related to the company’s climate risks, opportunities, strategy, targets, and climate performance.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A2',
    'indicator_name_id' => 'Peran manajemen senior dalam strategi iklim',
    'indicator_name_en' => 'Senior Management Role in Climate Strategy',
    'definition_id' => 'Mengukur tingkat tanggung jawab dan akuntabilitas manajemen senior dalam mengimplementasikan, memantau dan mengevaluasi strategi iklim perusahaan.',
    'definition_en' => 'Measures the level of responsibility and accountability of senior management in implementing, monitoring, and evaluating the company’s climate strategy.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A3',
    'indicator_name_id' => 'Komite keberlanjutan atau iklim aktif',
    'indicator_name_en' => 'Active Sustainability or Climate Committee',
    'definition_id' => 'Mengukur keberadaan, aktivitas, efektivitas, dan kontribusi komite khusus dalam mengoordinasikan tata kelola dan pengambilan keputusan terkait perubahan iklim.',
    'definition_en' => 'Measures the existence, activities, effectiveness, and contribution of a dedicated committee in coordinating climate governance and climate-related decision-making.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A4',
    'indicator_name_id' => 'Insentif berbasis kinerja iklim',
    'indicator_name_en' => 'Climate Performance-Based Incentives',
    'definition_id' => 'Mengukur tingkat keterkaitan antara sistem remunerasi pimpinan dengan pencapaian target iklim dan dekarbonisasi perusahaan.',
    'definition_en' => 'Measures the extent to which executive remuneration is linked to the achievement of climate targets and corporate decarbonization objectives.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A5',
    'indicator_name_id' => 'Transparansi pelaporan tata kelola iklim',
    'indicator_name_en' => 'Transparency of Climate Governance Reporting',
    'definition_id' => 'Mengukur tingkat keterbukaan perusahaan dalam mengungkapkan struktur tata kelola, proses pengawasan, serta mekanisme pengambilan keputusan terkait isu iklim kepada pemangku kepentingan.',
    'definition_en' => 'Measures the level of transparency in disclosing the company’s climate governance structure, oversight processes, and decision-making mechanisms to stakeholders.',
],

        
        // dimensi b
        [
    'dimension' => 'B',
    'indicator_id' => 'B1',
    'indicator_name_id' => 'Identifikasi risiko & peluang iklim',
    'indicator_name_en' => 'Identification of Climate Risks and Opportunities',
    'definition_id' => 'Mengukur kemampuan perusahaan dalam mengenali dan mendokumentasikan risiko serta peluang yang muncul akibat perubahan iklim terhadap operasional dan bisnis.',
    'definition_en' => 'Measures the company’s ability to identify and document climate-related risks and opportunities affecting its operations and business.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B2',
    'indicator_name_id' => 'Dampak iklim pada model bisnis & keuangan',
    'indicator_name_en' => 'Climate Impacts on Business Model and Financial Performance',
    'definition_id' => 'Mengukur tingkat integrasi pertimbangan iklim ke dalam model bisnis, investasi, struktur biaya, pendapatan, dan perencanaan keuangan perusahaan.',
    'definition_en' => 'Measures the extent to which climate considerations are integrated into the company’s business model, investments, cost structure, revenue generation, and financial planning.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B3',
    'indicator_name_id' => 'Analisis skenario iklim',
    'indicator_name_en' => 'Climate Scenario Analysis',
    'definition_id' => 'Mengukur kemampuan perusahaan mengevaluasi dampak berbagai skenario perubahan iklim terhadap keberlanjutan bisnis dan investasi.',
    'definition_en' => 'Measures the company’s ability to evaluate the impacts of various climate change scenarios on business sustainability and investment decisions.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B4',
    'indicator_name_id' => 'Rencana transisi energi rendah karbon',
    'indicator_name_en' => 'Low-Carbon Energy Transition Plan',
    'definition_id' => 'Mengukur keberadaan dan kualitas strategi perusahaan dalam mengurangi ketergantungan terhadap sumber energi intensif karbon.',
    'definition_en' => 'Measures the existence and quality of the company’s strategy to reduce dependence on carbon-intensive energy sources.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B5',
    'indicator_name_id' => 'Integrasi strategi iklim dengan SDGs & ISSB',
    'indicator_name_en' => 'Integration of Climate Strategy with the SDGs and ISSB',
    'definition_id' => 'Mengukur tingkat keselarasan strategi iklim perusahaan dengan tujuan pembangunan berkelanjutan (SDGs) dan standar pelaporan keberlanjutan ISSB.',
    'definition_en' => 'Measures the alignment of the company’s climate strategy with the Sustainable Development Goals (SDGs) and the ISSB Sustainability Disclosure Standards.',
],

        // dimensi c
        [
    'dimension' => 'C',
    'indicator_id' => 'C1',
    'indicator_name_id' => 'Identifikasi risiko fisik & transisi',
    'indicator_name_en' => 'Identification of Physical and Transition Risks',
    'definition_id' => 'Mengukur kemampuan perusahaan dalam mengidentifikasi risiko fisik akibat perubahan iklim serta risiko transisi akibat perubahan regulasi, teknologi, pasar dan preferensi konsumen.',
    'definition_en' => 'Measures the company’s ability to identify physical risks arising from climate change as well as transition risks resulting from changes in regulations, technology, markets, and consumer preferences.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C2',
    'indicator_name_id' => 'Sistem mitigasi & respons risiko iklim',
    'indicator_name_en' => 'Climate Risk Mitigation and Response System',
    'definition_id' => 'Mengukur keberadaan dan efektivitas sistem perusahaan dalam mengurangi dampak risiko iklim dan merespons kejadian terkait iklim secara sistematis.',
    'definition_en' => 'Measures the existence and effectiveness of the company’s systems for mitigating climate-related risks and responding systematically to climate-related events.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C3',
    'indicator_name_id' => 'Integrasi risiko iklim ke ERM',
    'indicator_name_en' => 'Integration of Climate Risks into Enterprise Risk Management (ERM)',
    'definition_id' => 'Mengukur tingkat integrasi risiko iklim ke dalam sistem Enterprise Risk Management (ERM) dan proses tata kelola risiko perusahaan.',
    'definition_en' => 'Measures the extent to which climate-related risks are integrated into the Enterprise Risk Management (ERM) framework and the company’s risk governance processes.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C4',
    'indicator_name_id' => 'Pelaporan risiko ke dewan & publik',
    'indicator_name_en' => 'Climate Risk Reporting to the Board and the Public',
    'definition_id' => 'Mengukur frekuensi, kualitas, dan transparansi pelaporan risiko iklim kepada dewan direksi serta pemangku kepentingan eksternal.',
    'definition_en' => 'Measures the frequency, quality, and transparency of climate risk reporting to the board of directors and external stakeholders.',
],

        // dimensi d
        [
    'dimension' => 'D',
    'indicator_id' => 'D1',
    'indicator_name_id' => 'Emisi GRK Scope 1, 2, 3',
    'indicator_name_en' => 'Scope 1, 2, and 3 Greenhouse Gas Emissions',
    'definition_id' => 'Mengukur kemampuan perusahaan dalam menghitung, melaporkan dan mengelola emisi gas rumah kaca dari seluruh aktivitas operasional dan rantai nilai.',
    'definition_en' => 'Measures the company’s capability to quantify, disclose, and manage greenhouse gas (GHG) emissions across its operations and value chain.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D2',
    'indicator_name_id' => 'Intensitas karbon',
    'indicator_name_en' => 'Carbon Intensity',
    'definition_id' => 'Mengukur efisiensi emisi gas rumah kaca yang dihasilkan per unit energi atau produksi.',
    'definition_en' => 'Measures the efficiency of greenhouse gas emissions generated per unit of energy consumption or production output.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D3',
    'indicator_name_id' => 'Target emisi berbasis sains (SBTi)',
    'indicator_name_en' => 'Science-Based Emissions Reduction Targets (SBTi)',
    'definition_id' => 'Mengukur tingkat keselarasan target pengurangan emisi perusahaan dengan jalur ilmiah pembatasan kenaikan suhu global.',
    'definition_en' => 'Measures the alignment of the company’s greenhouse gas emissions reduction targets with science-based pathways for limiting global temperature rise.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D4',
    'indicator_name_id' => 'Investasi adaptasi & infrastruktur resilien',
    'indicator_name_en' => 'Climate Adaptation Investment and Resilient Infrastructure',
    'definition_id' => 'Mengukur tingkat komitmen finansial perusahaan dalam mendukung adaptasi iklim dan pembangunan infrastruktur yang tahan terhadap risiko iklim.',
    'definition_en' => 'Measures the company’s financial commitment to climate adaptation initiatives and the development of infrastructure resilient to climate-related risks.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D5',
    'indicator_name_id' => 'Metrik adaptasi non-karbon',
    'indicator_name_en' => 'Non-Carbon Climate Adaptation Metrics',
    'definition_id' => 'Mengukur kemampuan perusahaan dalam memantau dan mengevaluasi indikator adaptasi fisik, sosial dan operasional yang tidak secara langsung berkaitan dengan emisi karbon.',
    'definition_en' => 'Measures the company’s ability to monitor and evaluate physical, social, and operational adaptation indicators that are not directly related to carbon emissions.',
],

        // dimensi e
        [
    'dimension' => 'E',
    'indicator_id' => 'E1',
    'indicator_name_id' => 'Asesmen risiko rantai pasok energi',
    'indicator_name_en' => 'Energy Supply Chain Risk Assessment',
    'definition_id' => 'Mengukur kemampuan perusahaan mengidentifikasi dan mengelola risiko iklim pada pemasok dan rantai pasok energi.',
    'definition_en' => 'Measures the company’s ability to identify and manage climate-related risks across its suppliers and energy supply chain.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E3',
    'indicator_name_id' => 'Strategi transisi adil (just transition)',
    'indicator_name_en' => 'Just Transition Strategy',
    'definition_id' => 'Mengukur komitmen perusahaan dalam memastikan transisi menuju ekonomi rendah karbon berlangsung secara adil bagi pekerja dan kelompok yang terdampak.',
    'definition_en' => 'Measures the company’s commitment to ensuring that the transition to a low-carbon economy is carried out fairly for workers and affected communities.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E4',
    'indicator_name_id' => 'Investasi sosial untuk resiliensi komunitas',
    'indicator_name_en' => 'Social Investment for Community Resilience',
    'definition_id' => 'Mengukur kontribusi perusahaan dalam meningkatkan kemampuan komunitas lokal untuk beradaptasi dan pulih dari dampak perubahan iklim.',
    'definition_en' => 'Measures the company’s contribution to enhancing the capacity of local communities to adapt to and recover from the impacts of climate change.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E5',
    'indicator_name_id' => 'Mekanisme keluhan & partisipasi publik',
    'indicator_name_en' => 'Grievance Mechanism and Public Participation',
    'definition_id' => 'Mengukur efektivitas sistem perusahaan dalam menerima, menindaklanjuti dan mengintegrasikan masukan masyarakat terkait isu lingkungan dan iklim.',
    'definition_en' => 'Measures the effectiveness of the company’s system for receiving, addressing, and integrating public feedback related to environmental and climate issues.',
],

        ]);
    }
}
