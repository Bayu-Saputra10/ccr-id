<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InterpretationResult;

class InterpretationResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // infrastruktur 
        InterpretationResult::create([
    'sector' => 'Infrastructure',
    'category' => 'Non-Resilient',
    'score_min' => '0',
    'score_max' => '20',
    'description_id' => 'Aset dan layanan perusahaan sangat rentan terhadap risiko fisik iklim, sementara sistem adaptasi dan investasi infrastruktur tahan iklim belum memadai.',
    'description_en' => 'The company’s assets and services are highly vulnerable to physical climate risks, while climate-resilient infrastructure adaptation systems and investments remain inadequate.',
]);

InterpretationResult::create([
    'sector' => 'Infrastructure',
    'category' => 'Basic Reactive',
    'score_min' => '21',
    'score_max' => '40',
    'description_id' => 'Perusahaan memiliki langkah mitigasi risiko fisik yang terbatas, namun masih bersifat reaktif terhadap kejadian cuaca ekstrem dan belum terintegrasi ke dalam perencanaan maupun desain infrastruktur.',
    'description_en' => 'The company has implemented limited physical climate risk mitigation measures, but these remain reactive to extreme weather events and are not yet integrated into infrastructure planning and design.',
]);

InterpretationResult::create([
    'sector' => 'Infrastructure',
    'category' => 'Emerging Resilient',
    'score_min' => '41',
    'score_max' => '60',
    'description_id' => 'Risiko fisik terhadap aset telah diidentifikasi dan sebagian investasi adaptasi telah dilakukan, namun belum diterapkan secara konsisten pada seluruh aset dan layanan infrastruktur.',
    'description_en' => 'Physical risks to infrastructure assets have been identified, and some adaptation investments have been implemented; however, they have not yet been consistently applied across all assets and services.',
]);

InterpretationResult::create([
    'sector' => 'Infrastructure',
    'category' => 'Integrated Resilient',
    'score_min' => '61',
    'score_max' => '80',
    'description_id' => 'Perusahaan telah memiliki sistem manajemen risiko fisik, investasi infrastruktur tahan iklim, serta mekanisme adaptasi operasional yang terintegrasi dalam pengelolaan bisnis.',
    'description_en' => 'The company has established an integrated physical climate risk management system, climate-resilient infrastructure investments, and operational adaptation mechanisms within its business operations.',
]);

InterpretationResult::create([
    'sector' => 'Infrastructure',
    'category' => 'Transformative Resilient',
    'score_min' => '81',
    'score_max' => '100',
    'description_id' => 'Infrastruktur dirancang secara proaktif untuk menghadapi perubahan iklim jangka panjang dan menjadi contoh praktik terbaik dalam membangun ketahanan wilayah serta layanan publik.',
    'description_en' => 'Infrastructure is proactively designed to address long-term climate change and serves as a benchmark for regional resilience and sustainable public service delivery.',
]);

        // manufaktur
        InterpretationResult::create([
    'sector' => 'Manufacturing',
    'category' => 'Non-Resilient',
    'score_min' => '0',
    'score_max' => '20',
    'description_id' => 'Perusahaan belum mengelola risiko iklim, efisiensi energi, emisi, limbah, dan rantai pasok secara sistematis.',
    'description_en' => 'The company has not systematically managed climate risks, energy efficiency, emissions, waste, or supply chain sustainability.',
]);

InterpretationResult::create([
    'sector' => 'Manufacturing',
    'category' => 'Basic Reactive',
    'score_min' => '21',
    'score_max' => '40',
    'description_id' => 'Pengelolaan lingkungan masih berorientasi pada kepatuhan terhadap regulasi dan belum menjadi bagian dari strategi bisnis maupun dekarbonisasi industri.',
    'description_en' => 'Environmental management is primarily focused on regulatory compliance and has not yet become an integral part of the company’s business strategy or industrial decarbonization efforts.',
]);

InterpretationResult::create([
    'sector' => 'Manufacturing',
    'category' => 'Emerging Resilient',
    'score_min' => '41',
    'score_max' => '60',
    'description_id' => 'Perusahaan mulai melakukan audit energi, meningkatkan efisiensi proses produksi, mengelola emisi, dan menerapkan beberapa inisiatif rantai pasok hijau, namun cakupannya masih terbatas.',
    'description_en' => 'The company has begun conducting energy audits, improving production efficiency, managing emissions, and implementing several green supply chain initiatives; however, these efforts remain limited in scope.',
]);

InterpretationResult::create([
    'sector' => 'Manufacturing',
    'category' => 'Integrated Resilient',
    'score_min' => '61',
    'score_max' => '80',
    'description_id' => 'Dekarbonisasi rantai pasok, efisiensi energi, pengelolaan sumber daya, dan pengurangan emisi telah menjadi bagian yang terintegrasi dalam strategi operasional perusahaan.',
    'description_en' => 'Supply chain decarbonization, energy efficiency, resource management, and emissions reduction have been fully integrated into the company’s operational strategy.',
]);

InterpretationResult::create([
    'sector' => 'Manufacturing',
    'category' => 'Transformative Resilient',
    'score_min' => '81',
    'score_max' => '100',
    'description_id' => 'Perusahaan menerapkan praktik industri rendah karbon, efisiensi energi tingkat lanjut, ekonomi sirkular, serta rantai pasok hijau secara menyeluruh sehingga menjadi acuan dalam transformasi industri berkelanjutan.',
    'description_en' => 'The company has implemented low-carbon manufacturing, advanced energy efficiency, circular economy practices, and sustainable green supply chains comprehensively, serving as a benchmark for industrial transformation.',
]);

        // agrikultur
        InterpretationResult::create([
    'sector' => 'Agriculture',
    'category' => 'Non-Resilient',
    'score_min' => '0',
    'score_max' => '20',
    'description_id' => 'Perusahaan belum memiliki sistem adaptasi agroklimat, pengelolaan risiko produksi, maupun program ketahanan petani dan rantai pasok yang memadai.',
    'description_en' => 'The company has not established adequate agroclimatic adaptation systems, production risk management, or farmer and supply chain resilience programs.',
]);

InterpretationResult::create([
    'sector' => 'Agriculture',
    'category' => 'Basic Reactive',
    'score_min' => '21',
    'score_max' => '40',
    'description_id' => 'Adaptasi terhadap perubahan iklim masih bersifat sporadis dan reaktif, dengan fokus utama pada penanganan gangguan cuaca maupun penurunan produksi dalam jangka pendek.',
    'description_en' => 'Climate change adaptation remains sporadic and reactive, primarily focusing on short-term responses to extreme weather events and production disruptions.',
]);

InterpretationResult::create([
    'sector' => 'Agriculture',
    'category' => 'Emerging Resilient',
    'score_min' => '41',
    'score_max' => '60',
    'description_id' => 'Perusahaan mulai menerapkan adaptasi lahan, pengelolaan sumber daya air, mitigasi emisi produksi, serta keterlibatan petani dalam praktik pertanian berkelanjutan, namun implementasinya belum konsisten di seluruh rantai pasok.',
    'description_en' => 'The company has begun implementing land adaptation, water resource management, production emissions mitigation, and farmer engagement in sustainable agricultural practices; however, implementation remains inconsistent across the supply chain.',
]);

InterpretationResult::create([
    'sector' => 'Agriculture',
    'category' => 'Integrated Resilient',
    'score_min' => '61',
    'score_max' => '80',
    'description_id' => 'Risiko agroklimat telah terintegrasi ke dalam perencanaan produksi, pengelolaan lahan, pengelolaan rantai pasok, serta program pemberdayaan petani sebagai bagian dari strategi bisnis.',
    'description_en' => 'Agroclimatic risks have been integrated into production planning, land management, supply chain management, and farmer empowerment programs as part of the company’s business strategy.',
]);

InterpretationResult::create([
    'sector' => 'Agriculture',
    'category' => 'Transformative Resilient',
    'score_min' => '81',
    'score_max' => '100',
    'description_id' => 'Perusahaan memiliki sistem produksi pertanian yang adaptif, rendah emisi, dan tangguh terhadap perubahan iklim, serta mampu meningkatkan ketahanan ekonomi, sosial, dan lingkungan bagi petani serta komunitas di seluruh rantai nilai.',
    'description_en' => 'The company has established an adaptive, low-emission, and climate-resilient agricultural production system that strengthens the economic, social, and environmental resilience of farmers and communities throughout the value chain.',
]);

        // keuangan
        InterpretationResult::create([
    'sector' => 'Finance',
    'category' => 'Non-Resilient',
    'score_min' => '0',
    'score_max' => '20',
    'description_id' => 'Bank belum mengintegrasikan risiko iklim ke dalam portofolio pembiayaan, belum menghitung financed emissions, serta belum memiliki sistem manajemen risiko iklim yang memadai.',
    'description_en' => 'The bank has not integrated climate risks into its financing portfolio, has not measured financed emissions, and has not established an adequate climate risk management system.',
]);

InterpretationResult::create([
    'sector' => 'Finance',
    'category' => 'Basic Reactive',
    'score_min' => '21',
    'score_max' => '40',
    'description_id' => 'Bank mulai melakukan pengungkapan ESG atau keuangan berkelanjutan, namun risiko iklim belum menjadi bagian utama dalam proses pemberian kredit, Enterprise Risk Management (ERM), maupun strategi pengelolaan portofolio.',
    'description_en' => 'The bank has begun ESG and sustainable finance disclosures; however, climate risk has not yet become a core component of credit assessment, Enterprise Risk Management (ERM), or portfolio management strategy.',
]);

InterpretationResult::create([
    'sector' => 'Finance',
    'category' => 'Emerging Resilient',
    'score_min' => '41',
    'score_max' => '60',
    'description_id' => 'Bank mulai menerapkan penilaian risiko iklim, melakukan pengukuran sebagian financed emissions, serta mengembangkan pembiayaan hijau, namun implementasinya belum mencakup seluruh portofolio pembiayaan.',
    'description_en' => 'The bank has begun implementing climate risk assessments, partially measuring financed emissions, and developing green financing initiatives; however, these practices have not yet been applied across the entire financing portfolio.',
]);

InterpretationResult::create([
    'sector' => 'Finance',
    'category' => 'Integrated Resilient',
    'score_min' => '61',
    'score_max' => '80',
    'description_id' => 'Risiko iklim telah terintegrasi ke dalam Enterprise Risk Management (ERM), manajemen risiko kredit, climate stress testing, pengukuran financed emissions, serta strategi pembiayaan hijau dan transisi.',
    'description_en' => 'Climate risk has been integrated into Enterprise Risk Management (ERM), credit risk management, climate stress testing, financed emissions measurement, and green and transition finance strategies.',
]);

InterpretationResult::create([
    'sector' => 'Finance',
    'category' => 'Transformative Resilient',
    'score_min' => '81',
    'score_max' => '100',
    'description_id' => 'Bank menjadi pemimpin dalam transition finance melalui dekarbonisasi portofolio, penerapan climate stress testing yang komprehensif, serta strategi pembiayaan rendah karbon yang matang dan berkelanjutan.',
    'description_en' => 'The bank demonstrates leadership in transition finance through portfolio decarbonization, comprehensive climate stress testing, and mature long-term low-carbon financing strategies.',
]);

        // energi & pertambangan
        InterpretationResult::create([
    'sector' => 'Mining',
    'category' => 'Non-Resilient',
    'score_min' => '0',
    'score_max' => '20',
    'description_id' => 'Perusahaan belum memiliki sistem pengelolaan risiko iklim maupun strategi transisi energi yang memadai. Ketergantungan terhadap aktivitas berintensitas karbon tinggi masih sangat besar tanpa rencana mitigasi dan dekarbonisasi yang jelas.',
    'description_en' => 'The company has not established an adequate climate risk management system or energy transition strategy. Its operations remain highly dependent on carbon-intensive activities without a clear mitigation and decarbonization plan.',
]);

InterpretationResult::create([
    'sector' => 'Mining',
    'category' => 'Basic Reactive',
    'score_min' => '21',
    'score_max' => '40',
    'description_id' => 'Perusahaan mulai merespons isu perubahan iklim, namun upaya yang dilakukan masih berfokus pada kepatuhan terhadap regulasi dan belum mengintegrasikan transisi energi ke dalam strategi bisnis maupun investasi.',
    'description_en' => 'The company has begun responding to climate change issues; however, its efforts remain primarily compliance-driven and have not yet integrated the energy transition into its business and investment strategies.',
]);

InterpretationResult::create([
    'sector' => 'Mining',
    'category' => 'Emerging Resilient',
    'score_min' => '41',
    'score_max' => '60',
    'description_id' => 'Perusahaan telah memulai inisiatif pengurangan emisi, pengelolaan risiko iklim, dan transisi energi. Namun implementasinya masih belum konsisten serta belum sepenuhnya didukung oleh target dan pengukuran kinerja yang terstruktur.',
    'description_en' => 'The company has initiated emissions reduction, climate risk management, and energy transition programs. However, implementation remains inconsistent and is not yet fully supported by structured targets and performance measurement.',
]);

InterpretationResult::create([
    'sector' => 'Mining',
    'category' => 'Integrated Resilient',
    'score_min' => '61',
    'score_max' => '80',
    'description_id' => 'Risiko iklim, target pengurangan emisi, strategi transisi energi, dan keputusan investasi telah terintegrasi ke dalam tata kelola perusahaan, manajemen risiko, serta pengelolaan operasional secara menyeluruh.',
    'description_en' => 'Climate risks, emissions reduction targets, energy transition strategies, and investment decisions have been integrated into corporate governance, risk management, and overall business operations.',
]);

InterpretationResult::create([
    'sector' => 'Mining',
    'category' => 'Transformative Resilient',
    'score_min' => '81',
    'score_max' => '100',
    'description_id' => 'Perusahaan menunjukkan kepemimpinan dalam transisi energi melalui penerapan target berbasis sains (science-based targets), investasi rendah karbon, inovasi teknologi, serta sistem ketahanan iklim yang terintegrasi dan berkelanjutan.',
    'description_en' => 'The company demonstrates leadership in the energy transition through science-based targets, low-carbon investments, technological innovation, and a fully integrated, sustainable climate resilience system.',
]);
    }
}