<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Finance;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Finance::insert([

        // dimensi a
        [
    'dimension' => 'A',
    'indicator_id' => 'A1',

    'indicator_name_id' => 'Pengawasan dewan direksi terhadap isu iklim',
    'indicator_name_en' => 'Board Oversight of Climate-related Issues',

    'definition_id' => 'Mengukur tingkat keterlibatan dan pengawasan dewan direksi dalam pengambilan keputusan terkait risiko, peluang, strategi, target dan kinerja iklim perusahaan.',
    'definition_en' => 'Measures the level of board involvement and oversight in decision-making related to climate risks, opportunities, strategies, targets, and performance.',
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
    'definition_en' => 'Measures the existence, activities, effectiveness, and contribution of a dedicated committee coordinating climate governance and decision-making.',
],

[
    'dimension' => 'A',
    'indicator_id' => 'A5',

    'indicator_name_id' => 'Transparansi pelaporan tata kelola iklim',
    'indicator_name_en' => 'Transparency of Climate Governance Reporting',

    'definition_id' => 'Mengukur tingkat keterbukaan perusahaan dalam mengungkapkan struktur tata kelola, proses pengawasan, serta mekanisme pengambilan keputusan terkait isu iklim kepada pemangku kepentingan.',
    'definition_en' => 'Measures the transparency of the company in disclosing governance structures, oversight processes, and decision-making mechanisms related to climate issues.',
],

        
        // dimensi b
        [
    'dimension' => 'B',
    'indicator_id' => 'B1',

    'indicator_name_id' => 'Identifikasi risiko & peluang iklim',
    'indicator_name_en' => 'Identification of Climate Risks & Opportunities',

    'definition_id' => 'Mengukur kemampuan perusahaan dalam mengenali dan mendokumentasikan risiko serta peluang yang muncul akibat perubahan iklim terhadap operasional dan bisnis.',
    'definition_en' => 'Measures the company’s ability to identify and document climate-related risks and opportunities affecting its operations and business.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B2',

    'indicator_name_id' => 'Dampak iklim pada model bisnis & keuangan',
    'indicator_name_en' => 'Climate Impact on Business Model & Finance',

    'definition_id' => 'Mengukur tingkat integrasi pertimbangan iklim ke dalam model bisnis, investasi, struktur biaya, pendapatan, dan perencanaan keuangan perusahaan.',
    'definition_en' => 'Measures the extent to which climate considerations are integrated into the company’s business model, investments, cost structure, revenue, and financial planning.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B3',

    'indicator_name_id' => 'Analisis skenario iklim portofolio',
    'indicator_name_en' => 'Climate Scenario Analysis for Portfolio',

    'definition_id' => 'Mengukur kemampuan lembaga keuangan melakukan stress testing dan analisis dampak iklim terhadap portofolio pembiayaan dan investasi.',
    'definition_en' => 'Measures the financial institution’s ability to conduct stress testing and climate scenario analysis on its financing and investment portfolio.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B4',

    'indicator_name_id' => 'Kebijakan pembiayaan hijau dan transisi',
    'indicator_name_en' => 'Green and Transition Finance Policy',

    'definition_id' => 'Mengukur komitmen institusi keuangan dalam mengarahkan pembiayaan kepada aktivitas ekonomi rendah karbon dan berkelanjutan.',
    'definition_en' => 'Measures the financial institution’s commitment to directing financing toward low-carbon and sustainable economic activities.',
],

[
    'dimension' => 'B',
    'indicator_id' => 'B5',

    'indicator_name_id' => 'Integrasi strategi iklim dengan SDGs & ISSB',
    'indicator_name_en' => 'Integration of Climate Strategy with SDGs & ISSB',

    'definition_id' => 'Mengukur tingkat keselarasan strategi iklim perusahaan dengan tujuan pembangunan berkelanjutan (SDGs) dan standar pelaporan keberlanjutan ISSB.',
    'definition_en' => 'Measures the alignment of the company’s climate strategy with the Sustainable Development Goals (SDGs) and ISSB Sustainability Disclosure Standards.',
],

        // dimensi c
        [
    'dimension' => 'C',
    'indicator_id' => 'C1',

    'indicator_name_id' => 'Identifikasi risiko fisik dan transisi dalam portofolio kredit',
    'indicator_name_en' => 'Identification of Physical and Transition Risks in the Credit Portfolio',

    'definition_id' => 'Mengukur integrasi risiko fisik dan transisi ke dalam proses penilaian risiko kredit dan pengelolaan portofolio.',
    'definition_en' => 'Measures the integration of physical and transition climate risks into credit risk assessment and portfolio management processes.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C2',

    'indicator_name_id' => 'Sistem mitigasi & respons risiko iklim',
    'indicator_name_en' => 'Climate Risk Mitigation & Response System',

    'definition_id' => 'Mengukur keberadaan dan efektivitas sistem perusahaan dalam mengurangi dampak risiko iklim dan merespons kejadian terkait iklim secara sistematis.',
    'definition_en' => 'Measures the existence and effectiveness of the company’s systems for mitigating climate risks and responding systematically to climate-related events.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C3',

    'indicator_name_id' => 'Integrasi risiko iklim ke ERM',
    'indicator_name_en' => 'Integration of Climate Risks into Enterprise Risk Management (ERM)',

    'definition_id' => 'Mengukur tingkat integrasi risiko iklim ke dalam sistem Enterprise Risk Management (ERM) dan proses tata kelola risiko perusahaan.',
    'definition_en' => 'Measures the extent to which climate risks are integrated into the Enterprise Risk Management (ERM) framework and the company’s risk governance processes.',
],

[
    'dimension' => 'C',
    'indicator_id' => 'C4',

    'indicator_name_id' => 'Pelaporan risiko ke dewan & publik',
    'indicator_name_en' => 'Climate Risk Reporting to the Board & Public',

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
    'definition_en' => 'Measures the company’s capability to calculate, disclose, and manage greenhouse gas emissions across its operations and value chain.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D3',

    'indicator_name_id' => 'Target emisi portofolio (Financed Emissions)',
    'indicator_name_en' => 'Portfolio Emissions Target (Financed Emissions)',

    'definition_id' => 'Mengukur kemampuan institusi keuangan dalam menetapkan dan mengelola target pengurangan emisi yang berasal dari aktivitas pembiayaan.',
    'definition_en' => 'Measures the financial institution’s capability to establish and manage emission reduction targets associated with financed emissions.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D4',

    'indicator_name_id' => 'Investasi adaptasi & infrastruktur resilien',
    'indicator_name_en' => 'Investment in Climate Adaptation & Resilient Infrastructure',

    'definition_id' => 'Mengukur tingkat komitmen finansial perusahaan dalam mendukung adaptasi iklim dan pembangunan infrastruktur yang tahan terhadap risiko iklim.',
    'definition_en' => 'Measures the company’s financial commitment to climate adaptation initiatives and the development of climate-resilient infrastructure.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D5',

    'indicator_name_id' => 'Metrik adaptasi non-karbon',
    'indicator_name_en' => 'Non-Carbon Climate Adaptation Metrics',

    'definition_id' => 'Mengukur kemampuan perusahaan dalam memantau dan mengevaluasi indikator adaptasi fisik, sosial dan operasional yang tidak secara langsung berkaitan dengan emisi karbon.',
    'definition_en' => 'Measures the company’s ability to monitor and evaluate physical, social, and operational adaptation indicators that are not directly related to carbon emissions.',
],

[
    'dimension' => 'D',
    'indicator_id' => 'D6',

    'indicator_name_id' => 'Pelaporan exposure ke sektor karbon tinggi',
    'indicator_name_en' => 'Exposure Reporting for High-Carbon Sectors',

    'definition_id' => 'Mengukur tingkat transparansi dan pengelolaan eksposur terhadap sektor ekonomi dengan intensitas karbon tinggi.',
    'definition_en' => 'Measures the transparency and management of the company’s exposure to high-carbon-emitting economic sectors.',
],

        // dimensi e
        [
    'dimension' => 'E',
    'indicator_id' => 'E2',

    'indicator_name_id' => 'Peningkatan kapasitas borrower',
    'indicator_name_en' => 'Borrower Capacity Building',

    'definition_id' => 'Mengukur upaya lembaga keuangan dalam meningkatkan kesiapan debitur untuk mengelola risiko iklim dan transisi keberlanjutan.',
    'definition_en' => 'Measures the financial institution’s efforts to strengthen borrowers’ capacity to manage climate risks and support the transition to a sustainable economy.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E3',

    'indicator_name_id' => 'Strategi transisi adil (Just Transition)',
    'indicator_name_en' => 'Just Transition Strategy',

    'definition_id' => 'Mengukur komitmen perusahaan dalam memastikan transisi menuju ekonomi rendah karbon berlangsung secara adil bagi pekerja dan kelompok yang terdampak.',
    'definition_en' => 'Measures the company’s commitment to ensuring that the transition to a low-carbon economy is fair and inclusive for workers and affected communities.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E4',

    'indicator_name_id' => 'Investasi sosial untuk resiliensi komunitas',
    'indicator_name_en' => 'Social Investment for Community Resilience',

    'definition_id' => 'Mengukur kontribusi perusahaan dalam meningkatkan kemampuan komunitas lokal untuk beradaptasi dan pulih dari dampak perubahan iklim.',
    'definition_en' => 'Measures the company’s contribution to enhancing the capacity of local communities to adapt to and recover from climate change impacts.',
],

[
    'dimension' => 'E',
    'indicator_id' => 'E5',

    'indicator_name_id' => 'Mekanisme keluhan & partisipasi publik',
    'indicator_name_en' => 'Grievance Mechanism & Public Participation',

    'definition_id' => 'Mengukur efektivitas sistem perusahaan dalam menerima, menindaklanjuti dan mengintegrasikan masukan masyarakat terkait isu lingkungan dan iklim.',
    'definition_en' => 'Measures the effectiveness of the company’s systems for receiving, responding to, and incorporating public feedback on environmental and climate-related issues.',
],
        ]);
    }
}
