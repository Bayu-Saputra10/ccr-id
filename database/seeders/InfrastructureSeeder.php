<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Infrastructure;

class InfrastructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Infrastructure::insert([
        // dimensi a
        [
            'dimension' => 'A',
            'indicator_id' => 'A1',

            'indicator_name_id' => 'Pengawasan dewan direksi terhadap isu iklim',
            'indicator_name_en' => 'Board Oversight of Climate Issues',

            'definition_id' => 'Mengukur tingkat keterlibatan dan pengawasan dewan direksi dalam pengambilan keputusan terkait risiko, peluang, strategi, target dan kinerja iklim perusahaan.',
            'definition_en' => 'Measures the level of involvement and oversight of the board of directors in decision-making related to the company’s climate risks, opportunities, strategy, targets, and climate performance.',
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
            'definition_en' => 'Measures the existence, activities, effectiveness, and contribution of a dedicated sustainability or climate committee in coordinating governance and climate-related decision-making.',
        ],

        [
            'dimension' => 'A',
            'indicator_id' => 'A5',

            'indicator_name_id' => 'Transparansi pelaporan tata kelola iklim',
            'indicator_name_en' => 'Transparency of Climate Governance Reporting',

            'definition_id' => 'Mengukur tingkat keterbukaan perusahaan dalam mengungkapkan struktur tata kelola, proses pengawasan, serta mekanisme pengambilan keputusan terkait isu iklim kepada pemangku kepentingan.',
            'definition_en' => 'Measures the company’s level of transparency in disclosing its governance structure, oversight processes, and decision-making mechanisms related to climate issues to stakeholders.',
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
            'indicator_name_en' => 'Climate Impact on Business Model and Financial Performance',

            'definition_id' => 'Mengukur tingkat integrasi pertimbangan iklim ke dalam model bisnis, investasi, struktur biaya, pendapatan, dan perencanaan keuangan perusahaan.',
            'definition_en' => 'Measures the extent to which climate considerations are integrated into the company’s business model, investment decisions, cost structure, revenue generation, and financial planning.',
        ],

        [
            'dimension' => 'B',
            'indicator_id' => 'B3',

            'indicator_name_id' => 'Skenario risiko fisik aset (banjir, panas, longsor)',
            'indicator_name_en' => 'Physical Climate Risk Scenarios for Assets (Flood, Heat, Landslide)',

            'definition_id' => 'Mengukur kemampuan perusahaan menilai kerentanan aset terhadap ancaman fisik akibat perubahan iklim.',
            'definition_en' => 'Measures the company’s capability to assess asset vulnerability to physical climate hazards resulting from climate change.',
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
            'definition_en' => 'Measures the company’s ability to identify physical climate risks and transition risks arising from changes in regulations, technology, markets, and consumer preferences.',
        ],

        [
            'dimension' => 'C',
            'indicator_id' => 'C2',

            'indicator_name_id' => 'Sistem mitigasi & respons risiko iklim',
            'indicator_name_en' => 'Climate Risk Mitigation and Response System',

            'definition_id' => 'Mengukur keberadaan dan efektivitas sistem perusahaan dalam mengurangi dampak risiko iklim dan merespons kejadian terkait iklim secara sistematis.',
            'definition_en' => 'Measures the existence and effectiveness of the company’s system for mitigating climate risks and responding systematically to climate-related events.',
        ],

        [
            'dimension' => 'C',
            'indicator_id' => 'C3',

            'indicator_name_id' => 'Integrasi risiko iklim ke ERM perusahaan',
            'indicator_name_en' => 'Integration of Climate Risk into Enterprise Risk Management (ERM)',

            'definition_id' => 'Mengukur tingkat integrasi risiko iklim ke dalam sistem Enterprise Risk Management (ERM) dan proses tata kelola risiko perusahaan.',
            'definition_en' => 'Measures the extent to which climate risks are integrated into the company’s Enterprise Risk Management (ERM) framework and risk governance processes.',
        ],

        [
            'dimension' => 'C',
            'indicator_id' => 'C4',

            'indicator_name_id' => 'Pelaporan risiko ke dewan & publik',
            'indicator_name_en' => 'Reporting Climate Risks to the Board and the Public',

            'definition_id' => 'Mengukur frekuensi, kualitas, dan transparansi pelaporan risiko iklim kepada dewan direksi serta pemangku kepentingan eksternal.',
            'definition_en' => 'Measures the frequency, quality, and transparency of reporting climate-related risks to the board of directors and external stakeholders.',
        ],

        // dimensi d
        [
            'dimension' => 'D',
            'indicator_id' => 'D1',

            'indicator_name_id' => 'Emisi GRK Scope 1, 2, 3',
            'indicator_name_en' => 'GHG Emissions Scope 1, 2, and 3',

            'definition_id' => 'Mengukur kemampuan perusahaan dalam menghitung, melaporkan dan mengelola emisi gas rumah kaca dari seluruh aktivitas operasional dan rantai nilai.',
            'definition_en' => 'Measures the company’s capability to calculate, disclose, and manage greenhouse gas emissions across its operations and value chain.',
        ],

        [
            'dimension' => 'D',
            'indicator_id' => 'D2',

            'indicator_name_id' => 'Intensitas emisi per km/penumpang atau unit produksi',
            'indicator_name_en' => 'Emission Intensity per Passenger-Kilometre or Production Unit',

            'definition_id' => 'Mengukur efisiensi emisi yang dihasilkan dalam penyediaan layanan transportasi, utilitas atau infrastruktur.',
            'definition_en' => 'Measures the efficiency of greenhouse gas emissions generated in delivering transportation, utility, or infrastructure services.',
        ],

        [
            'dimension' => 'D',
            'indicator_id' => 'D4',

            'indicator_name_id' => 'Investasi adaptasi & infrastruktur resilien',
            'indicator_name_en' => 'Investment in Climate Adaptation and Resilient Infrastructure',

            'definition_id' => 'Mengukur tingkat komitmen finansial perusahaan dalam mendukung adaptasi iklim dan pembangunan infrastruktur yang tahan terhadap risiko iklim.',
            'definition_en' => 'Measures the company’s financial commitment to climate adaptation initiatives and the development of infrastructure resilient to climate risks.',
        ],

        [
            'dimension' => 'D',
            'indicator_id' => 'D5',

            'indicator_name_id' => 'Metrik adaptasi non-karbon (drainase, cadangan energi)',
            'indicator_name_en' => 'Non-Carbon Adaptation Metrics (Drainage, Energy Reserve)',

            'definition_id' => 'Mengukur kesiapan sistem pendukung operasional dalam menghadapi gangguan akibat cuaca ekstrem dan perubahan iklim.',
            'definition_en' => 'Measures the preparedness of operational support systems to withstand disruptions caused by extreme weather events and climate change.',
        ],

        [
            'dimension' => 'D',
            'indicator_id' => 'D6',

            'indicator_name_id' => 'Infrastruktur tahan iklim',
            'indicator_name_en' => 'Climate-Resilient Infrastructure',

            'definition_id' => 'Mengukur tingkat investasi yang diarahkan untuk meningkatkan ketahanan aset terhadap risiko iklim.',
            'definition_en' => 'Measures the level of investment dedicated to enhancing the resilience of infrastructure assets against climate-related risks.',
        ],

        // dimensi e
        [
            'dimension' => 'E',
            'indicator_id' => 'E3',

            'indicator_name_id' => 'Strategi transisi adil (just transition)',
            'indicator_name_en' => 'Just Transition Strategy',

            'definition_id' => 'Mengukur komitmen perusahaan dalam memastikan transisi menuju ekonomi rendah karbon berlangsung secara adil bagi pekerja dan kelompok yang terdampak.',
            'definition_en' => 'Measures the company’s commitment to ensuring that the transition to a low-carbon economy is carried out fairly for employees and affected communities.',
        ],

        [
            'dimension' => 'E',
            'indicator_id' => 'E4',

            'indicator_name_id' => 'Investasi sosial untuk resiliensi komunitas',
            'indicator_name_en' => 'Social Investment for Community Resilience',

            'definition_id' => 'Mengukur kontribusi perusahaan dalam meningkatkan kemampuan komunitas lokal untuk beradaptasi dan pulih dari dampak perubahan iklim.',
            'definition_en' => 'Measures the company’s contribution to strengthening the capacity of local communities to adapt to and recover from the impacts of climate change.',
        ],

        [
            'dimension' => 'E',
            'indicator_id' => 'E5',

            'indicator_name_id' => 'Mekanisme keluhan & partisipasi publik',
            'indicator_name_en' => 'Grievance Mechanism and Public Participation',

            'definition_id' => 'Mengukur efektivitas sistem perusahaan dalam menerima, menindaklanjuti dan mengintegrasikan masukan masyarakat terkait isu lingkungan dan iklim.',
            'definition_en' => 'Measures the effectiveness of the company’s system for receiving, responding to, and incorporating public feedback on environmental and climate-related issues.',
        ],

        [
            'dimension' => 'E',
            'indicator_id' => 'E6',

            'indicator_name_id' => 'Kolaborasi publik-swasta',
            'indicator_name_en' => 'Public–Private Collaboration',

            'definition_id' => 'Mengukur kontribusi perusahaan dalam membangun ketahanan wilayah melalui kemitraan dengan pemerintah dan pemangku kepentingan lainnya.',
            'definition_en' => 'Measures the company’s contribution to strengthening regional resilience through partnerships with government institutions and other stakeholders.',
        ],

        ]);
    }
}
