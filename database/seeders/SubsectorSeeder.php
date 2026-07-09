<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subsector;

class SubsectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subsector::insert([
            // infrastruktur
            ['sector'=>'infrastructure','name'=>'Jalan Tol'],
            ['sector'=>'infrastructure','name'=>'Pelabuhan'],
            ['sector'=>'infrastructure','name'=>'Bandara'],
            ['sector'=>'infrastructure','name'=>'Kereta Api'],
            ['sector'=>'infrastructure','name'=>'Telekomunikasi'],
            ['sector'=>'infrastructure','name'=>'Air Minum (Water Utility)'],
            ['sector'=>'infrastructure','name'=>'Pengelolaan Air Limbah'],
            ['sector'=>'infrastructure','name'=>'Konstruksi Gedung'],
            ['sector'=>'infrastructure','name'=>'Konstruksi Sipil'],
            ['sector'=>'infrastructure','name'=>'Kawasan Industri'],
            ['sector'=>'infrastructure','name'=>'Pembangkit Listrik'],
            ['sector'=>'infrastructure','name'=>'Transmisi & Distribusi Listrik'],

            // manufaktur
            ['sector'=>'manufacturing','name'=>'Industri Makanan & Minuman'],
            ['sector'=>'manufacturing','name'=>'Tekstil & Garmen'],
            ['sector'=>'manufacturing','name'=>'Pulp & Kertas'],
            ['sector'=>'manufacturing','name'=>'Kimia'],
            ['sector'=>'manufacturing','name'=>'Semen'],
            ['sector'=>'manufacturing','name'=>'Baja & Logam'],
            ['sector'=>'manufacturing','name'=>'Otomotif'],
            ['sector'=>'manufacturing','name'=>'Elektronik'],
            ['sector'=>'manufacturing','name'=>'Farmasi'],
            ['sector'=>'manufacturing','name'=>'Plastik & Kemasan'],
            ['sector'=>'manufacturing','name'=>'Barang Konsumsi'],
            ['sector'=>'manufacturing','name'=>'Mesin & Peralatan'],

            // agrikultur
            ['sector'=>'agriculture','name'=>'Perkebunan Kelapa Sawit'],
            ['sector'=>'agriculture','name'=>'Karet'],
            ['sector'=>'agriculture','name'=>'Teh'],
            ['sector'=>'agriculture','name'=>'Kopi'],
            ['sector'=>'agriculture','name'=>'Kakao'],
            ['sector'=>'agriculture','name'=>'Tebu'],
            ['sector'=>'agriculture','name'=>'Kehutanan (Forestry)'],
            ['sector'=>'agriculture','name'=>'Tanaman Pangan'],
            ['sector'=>'agriculture','name'=>'Hortikultura'],
            ['sector'=>'agriculture','name'=>'Peternakan'],
            ['sector'=>'agriculture','name'=>'Perikanan Budidaya'],
            ['sector'=>'agriculture','name'=>'Akuakultur'],

            // keuangan
            ['sector'=>'finance','name'=>'Bank Umum'],
            ['sector'=>'finance','name'=>'Bank Syariah'],
            ['sector'=>'finance','name'=>'Bank Pembangunan Daerah (BPD)'],
            ['sector'=>'finance','name'=>'Perusahaan Pembiayaan (Multifinance)'],
            ['sector'=>'finance','name'=>'Asuransi'],
            ['sector'=>'finance','name'=>'Reasuransi'],
            ['sector'=>'finance','name'=>'Sekuritas'],
            ['sector'=>'finance','name'=>'Manajer Investasi'],
            ['sector'=>'finance','name'=>'Dana Pensiun'],
            ['sector'=>'finance','name'=>'Modal Ventura'],
            ['sector'=>'finance','name'=>'Lembaga Pembiayaan Infrastruktur'],

            // pertambangan
            ['sector'=>'mining','name'=>'Batubara'],
            ['sector'=>'mining','name'=>'Minyak & Gas Bumi'],
            ['sector'=>'mining','name'=>'Nikel'],
            ['sector'=>'mining','name'=>'Tembaga'],
            ['sector'=>'mining','name'=>'Emas'],
            ['sector'=>'mining','name'=>'Timah'],
            ['sector'=>'mining','name'=>'Bauksit'],
            ['sector'=>'mining','name'=>'Bijih Besi'],
            ['sector'=>'mining','name'=>'Mangan'],
            ['sector'=>'mining','name'=>'Mineral Industri'],
            ['sector'=>'mining','name'=>'Panas Bumi (Geothermal)'],
            ['sector'=>'mining','name'=>'Jasa Pertambangan'],
        ]);
    }
}
