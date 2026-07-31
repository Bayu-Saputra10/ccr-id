<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturing;

class ManufacturingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturing::insert([

        // dimensi a
        [
    'dimension' => 'A',
    'indicator_id' => 'A1',
    'indicator_name_id' => 'Pengawasan dewan direksi terhadap isu iklim',
    'indicator_name_en' => 'Board Oversight of Climate-related Issues',
    'definition_id' => 'Mengukur tingkat keterlibatan dan pengawasan dewan direksi dalam pengambilan keputusan terkait risiko, peluang, strategi, target dan kinerja iklim perusahaan.',
    'definition_en' => 'Measures the level of board involvement and oversight in decision-making related to the company’s climate-related risks, opportunities, strategy, targets, and performance.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A2',
    'indicator_name_id' => 'Peran manajemen senior dalam strategi iklim',
    'indicator_name_en' => 'Senior Management Role in Climate Strategy',
    'definition_id' => 'Mengukur tingkat tanggung jawab dan akuntabilitas manajemen senior dalam mengimplementasikan, memantau dan mengevaluasi strategi iklim perusahaan.',
    'definition_en' => 'Measures the responsibility and accountability of senior management in implementing, monitoring, and evaluating the company’s climate strategy.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A3',
    'indicator_name_id' => 'Komite keberlanjutan atau iklim aktif',
    'indicator_name_en' => 'Active Sustainability or Climate Committee',
    'definition_id' => 'Mengukur keberadaan, aktivitas, efektivitas, dan kontribusi komite khusus dalam mengoordinasikan tata kelola dan pengambilan keputusan terkait perubahan iklim.',
    'definition_en' => 'Measures the existence, activity, effectiveness, and contribution of a dedicated committee in coordinating climate governance and climate-related decision-making.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A5',
    'indicator_name_id' => 'Transparansi pelaporan tata kelola iklim',
    'indicator_name_en' => 'Transparency of Climate Governance Reporting',
    'definition_id' => 'Mengukur tingkat keterbukaan perusahaan dalam mengungkapkan struktur tata kelola, proses pengawasan, serta mekanisme pengambilan keputusan terkait isu iklim kepada pemangku kepentingan.',
    'definition_en' => 'Measures the company’s transparency in disclosing governance structures, oversight processes, and decision-making mechanisms related to climate issues to stakeholders.',
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
    'indicator_name_en' => 'Climate Impact on Business and Financial Model',
    'definition_id' => 'Mengukur tingkat integrasi pertimbangan iklim ke dalam model bisnis, investasi, struktur biaya, pendapatan dan perencanaan keuangan perusahaan.',
    'definition_en' => 'Measures the extent to which climate considerations are integrated into the company’s business model, investments, cost structure, revenue generation, and financial planning.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B4',
    'indicator_name_id' => 'Strategi dekarbonisasi rantai pasok',
    'indicator_name_en' => 'Supply Chain Decarbonization Strategy',
    'definition_id' => 'Mengukur tingkat integrasi target pengurangan emisi ke dalam pengelolaan pemasok dan rantai pasok perusahaan.',
    'definition_en' => 'Measures the integration of emission reduction targets into supplier management and the company’s supply chain.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B5',
    'indicator_name_id' => 'Integrasi strategi iklim dengan SDGs & ISSB',
    'indicator_name_en' => 'Integration of Climate Strategy with SDGs and ISSB',
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
    'definition_en' => 'Measures the existence and effectiveness of the company’s systems to mitigate climate-related risks and respond systematically to climate-related events.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C3',
    'indicator_name_id' => 'Integrasi risiko iklim ke ERM',
    'indicator_name_en' => 'Integration of Climate Risks into Enterprise Risk Management',
    'definition_id' => 'Mengukur tingkat integrasi risiko iklim ke dalam sistem Enterprise Risk Management (ERM) dan proses tata kelola risiko perusahaan.',
    'definition_en' => 'Measures the extent to which climate-related risks are integrated into the company’s Enterprise Risk Management (ERM) framework and corporate risk governance processes.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C4',
    'indicator_name_id' => 'Pelaporan risiko ke dewan & publik',
    'indicator_name_en' => 'Reporting of Climate Risks to the Board and Public',
    'definition_id' => 'Mengukur frekuensi, kualitas, dan transparansi pelaporan risiko iklim kepada dewan direksi serta pemangku kepentingan eksternal.',
    'definition_en' => 'Measures the frequency, quality, and transparency of reporting climate-related risks to the board of directors and external stakeholders.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C5',
    'indicator_name_id' => 'Audit energi & emisi',
    'indicator_name_en' => 'Energy and Emissions Audit',
    'definition_id' => 'Mengukur tingkat evaluasi sistematis terhadap konsumsi energi dan emisi untuk mendukung efisiensi operasional.',
    'definition_en' => 'Measures the level of systematic evaluation of energy consumption and greenhouse gas emissions to improve operational efficiency.',
],

        // dimensi d
        [
    'dimension' => 'D',
    'indicator_id' => 'D1',
    'indicator_name_id' => 'Emisi GRK Scope 1, 2, 3',
    'indicator_name_en' => 'Scope 1, Scope 2, and Scope 3 GHG Emissions',
    'definition_id' => 'Mengukur kemampuan perusahaan dalam menghitung, melaporkan dan mengelola emisi gas rumah kaca dari seluruh aktivitas operasional dan rantai nilai.',
    'definition_en' => 'Measures the company’s capability to calculate, report, and manage greenhouse gas emissions across its operations and value chain.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D2',
    'indicator_name_id' => 'Intensitas energi per unit produk',
    'indicator_name_en' => 'Energy Intensity per Unit of Product',
    'definition_id' => 'Mengukur efisiensi penggunaan energi dalam menghasilkan output produksi.',
    'definition_en' => 'Measures the efficiency of energy use in producing manufacturing output.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D4',
    'indicator_name_id' => 'Investasi adaptasi & infrastruktur resilien',
    'indicator_name_en' => 'Investment in Climate Adaptation and Resilient Infrastructure',
    'definition_id' => 'Mengukur tingkat komitmen finansial perusahaan dalam mendukung adaptasi iklim dan pembangunan infrastruktur yang tahan terhadap risiko iklim.',
    'definition_en' => 'Measures the company’s financial commitment to climate adaptation and the development of climate-resilient infrastructure.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D5',
    'indicator_name_id' => 'Metrik adaptasi non-karbon',
    'indicator_name_en' => 'Non-carbon Climate Adaptation Metrics',
    'definition_id' => 'Mengukur kemampuan perusahaan dalam memantau dan mengevaluasi indikator adaptasi fisik, sosial dan operasional yang tidak secara langsung berkaitan dengan emisi karbon.',
    'definition_en' => 'Measures the company’s ability to monitor and evaluate physical, social, and operational adaptation indicators beyond direct carbon emissions.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D6',
    'indicator_name_id' => 'Pengelolaan limbah & air',
    'indicator_name_en' => 'Waste and Water Management',
    'definition_id' => 'Mengukur efektivitas perusahaan dalam mengurangi dampak lingkungan melalui pengelolaan limbah dan penggunaan air yang berkelanjutan.',
    'definition_en' => 'Measures the effectiveness of the company in reducing environmental impacts through sustainable waste and water management practices.',
],

        // dimensi e
        [
    'dimension' => 'E',
    'indicator_id' => 'E2',
    'indicator_name_id' => 'Pelibatan pemasok hijau',
    'indicator_name_en' => 'Green Supplier Engagement',
    'definition_id' => 'Mengukur tingkat integrasi prinsip keberlanjutan dan kinerja lingkungan ke dalam hubungan dengan pemasok.',
    'definition_en' => 'Measures the integration of sustainability principles and environmental performance into supplier relationships.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E3',
    'indicator_name_id' => 'Strategi transisi adil (just transition)',
    'indicator_name_en' => 'Just Transition Strategy',
    'definition_id' => 'Mengukur komitmen perusahaan dalam memastikan transisi menuju ekonomi rendah karbon berlangsung secara adil bagi pekerja dan kelompok yang terdampak.',
    'definition_en' => 'Measures the company’s commitment to ensuring that the transition to a low-carbon economy is fair for workers and affected communities.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E4',
    'indicator_name_id' => 'Investasi sosial untuk resiliensi komunitas',
    'indicator_name_en' => 'Social Investment for Community Resilience',
    'definition_id' => 'Mengukur kontribusi perusahaan dalam meningkatkan kemampuan komunitas lokal untuk beradaptasi dan pulih dari dampak perubahan iklim.',
    'definition_en' => 'Measures the company’s contribution to strengthening the resilience of local communities in adapting to and recovering from climate change impacts.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E5',
    'indicator_name_id' => 'Mekanisme keluhan & partisipasi publik',
    'indicator_name_en' => 'Grievance Mechanism and Public Participation',
    'definition_id' => 'Mengukur efektivitas sistem perusahaan dalam menerima, menindaklanjuti dan mengintegrasikan masukan masyarakat terkait isu lingkungan dan iklim.',
    'definition_en' => 'Measures the effectiveness of the company’s mechanisms for receiving, addressing, and incorporating public feedback on environmental and climate-related issues.',
],
        ]);
    }
}
