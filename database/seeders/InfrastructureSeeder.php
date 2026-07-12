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
        ['dimension'=>'A', 'indicator_id'=>'A1', 'indicator_name'=> 'Pengawasan dewan direksi terhadap isu iklim', 'definition'=>'Mengukur tingkat keterlibatan dan pengawasan dewan direksi dalam pengambilan keputusan terkait risiko, peluang, strategi, target dan kinerja iklim perusahaan.'],
        ['dimension'=>'A', 'indicator_id'=>'A2', 'indicator_name'=> 'Peran manajemen senior dalam strategi iklim', 'definition'=>'Mengukur tingkat tanggung jawab dan akuntabilitas manajemen senior dalam mengimplementasikan, memantau dan mengevaluasi strategi iklim perusahaan.'],
        ['dimension'=>'A', 'indicator_id'=>'A3', 'indicator_name'=> 'Komite keberlanjutan atau iklim aktif', 'definition'=>'Mengukur keberadaan, aktivitas, efektivitas, dan kontribusi komite khusus dalam mengoordinasikan tata kelola dan pengambilan keputusan terkait perubahan iklim.'],
        ['dimension'=>'A', 'indicator_id'=>'A5', 'indicator_name'=> 'Transparansi pelaporan tata kelola iklim', 'definition'=>'Mengukur tingkat keterbukaan perusahaan dalam mengungkapkan struktur tata kelola, proses pengawasan, serta mekanisme pengambilan keputusan terkait isu iklim kepada pemangku kepentingan.'],

        
        // dimensi b
        ['dimension'=>'B', 'indicator_id'=>'B1', 'indicator_name'=> 'Identifikasi risiko & peluang iklim', 'definition'=>'Mengukur kemampuan perusahaan dalam mengenali dan mendokumentasikan risiko serta peluang yang muncul akibat perubahan iklim terhadap operasional dan bisnis.'],
        ['dimension'=>'B', 'indicator_id'=>'B2', 'indicator_name'=> 'Dampak iklim pada model bisnis & keuangan', 'definiton'=>'Mengukur tingkat integrasi pertimbangan iklim ke dalam model bisnis, investasi, struktur biaya, pendapatan, dan perencanaan keuangan perusahaan.'],
        ['dimension'=>'B', 'indicator_id'=>'B3', 'indicator_name'=> 'Skenario risiko fisik aset (banjir, panas, longsor)', 'definiton'=>'Mengukur kemampuan perusahaan menilai kerentanan aset terhadap ancaman fisik akibat perubahan iklim.'],
        ['dimension'=>'B', 'indicator_id'=>'B5', 'indicator_name'=> 'Integrasi strategi iklim dengan SDGs & ISSB', 'definition'=>'Mengukur tingkat keselarasan strategi iklim perusahaan dengan tujuan pembangunan berkelanjutan (SDGs) dan standar pelaporan keberlanjutan ISSB.'],

        // dimensi c
        ['dimension'=>'C', 'indicator_id'=>'C1', 'indicator_name'=> 'Identifikasi risiko fisik & transisi', 'definition'=>'Mengukur kemampuan perusahaan dalam mengidentifikasi risiko fisik akibat perubahan iklim serta risiko transisi akibat perubahan regulasi, teknologi, pasar dan preferensi konsumen.'],
        ['dimension'=>'C', 'indicator_id'=>'C2', 'indicator_name'=> 'Sistem mitigasi & respons risiko iklim', 'definition'=>'Mengukur keberadaan dan efektivitas sistem perusahaan dalam mengurangi dampak risiko iklim dan merespons kejadian terkait iklim secara sistematis.'],
        ['dimension'=>'C', 'indicator_id'=>'C3', 'indicator_name'=> 'Integrasi risiko iklim ke ERM perusahaan', 'definition'=>'Mengukur tingkat integrasi risiko iklim ke dalam sistem Enterprise Risk Management (ERM) dan proses tata kelola risiko perusahaan.'],
        ['dimension'=>'C', 'indicator_id'=>'C4', 'indicator_name'=> 'Pelaporan risiko ke dewan & publik', 'definition'=>'Mengukur frekuensi, kualitas, dan transparansi pelaporan risiko iklim kepada dewan direksi serta pemangku kepentingan eksternal.'],

        // dimensi d
        ['dimension'=>'D', 'indicator_id'=>'D1', 'indicator_name'=> 'Emisi GRK Scope 1, 2, 3', 'definition'=>'Mengukur kemampuan perusahaan dalam menghitung, melaporkan dan mengelola emisi gas rumah kaca dari seluruh aktivitas operasional dan rantai nilai.'],
        ['dimension'=>'D', 'indicator_id'=>'D2', 'indicator_name'=> 'Intensitas emisi per km/penumpang atau unit produksi', 'definition'=>'Mengukur efisiensi emisi yang dihasilkan dalam penyediaan layanan transportasi, utilitas atau infrastruktur.'],
        ['dimension'=>'D', 'indicator_id'=>'D4', 'indicator_name'=> 'Investasi adaptasi & infrastruktur resilien', 'definition'=>'Mengukur tingkat komitmen finansial perusahaan dalam mendukung adaptasi iklim dan pembangunan infrastruktur yang tahan terhadap risiko iklim.'],
        ['dimension'=>'D', 'indicator_id'=>'D5', 'indicator_name'=> 'Metrik adaptasi non-karbon (drainase, cadangan energi)', 'definition'=>'Mengukur kesiapan sistem pendukung operasional dalam menghadapi gangguan akibat cuaca ekstrem dan perubahan iklim.'],
        ['dimension'=>'D', 'indicator_id'=>'D6', 'indicator_name'=> 'Infrastruktur tahan iklim', 'definition'=>'Mengukur tingkat investasi yang diarahkan untuk meningkatkan ketahanan aset terhadap risiko iklim.'],

        // dimensi e
        ['dimension'=>'E', 'indicator_id'=>'E3', 'indicator_name'=> 'Strategi transisi adil (just transition)', 'definition'=>'Mengukur komitmen perusahaan dalam memastikan transisi menuju ekonomi rendah karbon berlangsung secara adil bagi pekerja dan kelompok yang terdampak.'],
        ['dimension'=>'E', 'indicator_id'=>'E4', 'indicator_name'=> 'Investasi sosial untuk resiliensi komunitas', 'definition'=>'Mengukur kontribusi perusahaan dalam meningkatkan kemampuan komunitas lokal untuk beradaptasi dan pulih dari dampak perubahan iklim.'],
        ['dimension'=>'E', 'indicator_id'=>'E5', 'indicator_name'=> 'Mekanisme keluhan & partisipasi publik', 'definition'=>'Mengukur efektivitas sistem perusahaan dalam menerima, menindaklanjuti dan mengintegrasikan masukan masyarakat terkait isu lingkungan dan iklim.'],
        ['dimension'=>'E', 'indicator_id'=>'E6', 'indicator_name'=> 'Kolaborasi publik-swasta', 'definition'=>'Mengukur kontribusi perusahaan dalam membangun ketahanan wilayah melalui kemitraan dengan pemerintah dan pemangku kepentingan lainnya.'],

        ]);
    }
}
