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
            [
    'sector'=>'infrastructure',
    'name_id'=>'Jalan Tol',
    'name_en'=>'Toll Road',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Pelabuhan',
    'name_en'=>'Port',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Bandara',
    'name_en'=>'Airport',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Kereta Api',
    'name_en'=>'Railway',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Telekomunikasi',
    'name_en'=>'Telecommunications',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Air Minum',
    'name_en'=>'Water Utility',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Pengelolaan Air Limbah',
    'name_en'=>'Wastewater Management',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Konstruksi Gedung',
    'name_en'=>'Building Construction',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Konstruksi Sipil',
    'name_en'=>'Civil Construction',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Kawasan Industri',
    'name_en'=>'Industrial Estate',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Pembangkit Listrik',
    'name_en'=>'Power Generation',
],
[
    'sector'=>'infrastructure',
    'name_id'=>'Transmisi & Distribusi Listrik',
    'name_en'=>'Electricity Transmission & Distribution',
],

            // manufaktur
            ['sector'=>'manufacturing','name_id'=>'Industri Makanan & Minuman','name_en'=>'Food & Beverage Industry'],
['sector'=>'manufacturing','name_id'=>'Tekstil & Garmen','name_en'=>'Textile & Garment'],
['sector'=>'manufacturing','name_id'=>'Pulp & Kertas','name_en'=>'Pulp & Paper'],
['sector'=>'manufacturing','name_id'=>'Kimia','name_en'=>'Chemical'],
['sector'=>'manufacturing','name_id'=>'Semen','name_en'=>'Cement'],
['sector'=>'manufacturing','name_id'=>'Baja & Logam','name_en'=>'Steel & Metal'],
['sector'=>'manufacturing','name_id'=>'Otomotif','name_en'=>'Automotive'],
['sector'=>'manufacturing','name_id'=>'Elektronik','name_en'=>'Electronics'],
['sector'=>'manufacturing','name_id'=>'Farmasi','name_en'=>'Pharmaceutical'],
['sector'=>'manufacturing','name_id'=>'Plastik & Kemasan','name_en'=>'Plastic & Packaging'],
['sector'=>'manufacturing','name_id'=>'Barang Konsumsi','name_en'=>'Consumer Goods'],
['sector'=>'manufacturing','name_id'=>'Mesin & Peralatan','name_en'=>'Machinery & Equipment'],

            // agrikultur
            ['sector'=>'agriculture','name_id'=>'Perkebunan Kelapa Sawit','name_en'=>'Oil Palm Plantation'],
['sector'=>'agriculture','name_id'=>'Karet','name_en'=>'Rubber Plantation'],
['sector'=>'agriculture','name_id'=>'Teh','name_en'=>'Tea Plantation'],
['sector'=>'agriculture','name_id'=>'Kopi','name_en'=>'Coffee Plantation'],
['sector'=>'agriculture','name_id'=>'Kakao','name_en'=>'Cocoa Plantation'],
['sector'=>'agriculture','name_id'=>'Tebu','name_en'=>'Sugarcane Plantation'],
['sector'=>'agriculture','name_id'=>'Kehutanan (Forestry)','name_en'=>'Forestry'],
['sector'=>'agriculture','name_id'=>'Tanaman Pangan','name_en'=>'Food Crops'],
['sector'=>'agriculture','name_id'=>'Hortikultura','name_en'=>'Horticulture'],
['sector'=>'agriculture','name_id'=>'Peternakan','name_en'=>'Livestock'],
['sector'=>'agriculture','name_id'=>'Perikanan Budidaya','name_en'=>'Aquaculture Fisheries'],
['sector'=>'agriculture','name_id'=>'Akuakultur','name_en'=>'Aquaculture'],

            // keuangan
            ['sector'=>'finance','name_id'=>'Bank Umum','name_en'=>'Commercial Bank'],
['sector'=>'finance','name_id'=>'Bank Syariah','name_en'=>'Islamic Bank'],
['sector'=>'finance','name_id'=>'Bank Pembangunan Daerah (BPD)','name_en'=>'Regional Development Bank (BPD)'],
['sector'=>'finance','name_id'=>'Perusahaan Pembiayaan (Multifinance)','name_en'=>'Finance Company (Multifinance)'],
['sector'=>'finance','name_id'=>'Asuransi','name_en'=>'Insurance'],
['sector'=>'finance','name_id'=>'Reasuransi','name_en'=>'Reinsurance'],
['sector'=>'finance','name_id'=>'Sekuritas','name_en'=>'Securities Company'],
['sector'=>'finance','name_id'=>'Manajer Investasi','name_en'=>'Investment Manager'],
['sector'=>'finance','name_id'=>'Dana Pensiun','name_en'=>'Pension Fund'],
['sector'=>'finance','name_id'=>'Modal Ventura','name_en'=>'Venture Capital'],
['sector'=>'finance','name_id'=>'Lembaga Pembiayaan Infrastruktur','name_en'=>'Infrastructure Financing Institution'],

            // pertambangan
            ['sector'=>'mining','name_id'=>'Batubara','name_en'=>'Coal'],
['sector'=>'mining','name_id'=>'Minyak & Gas Bumi','name_en'=>'Oil & Natural Gas'],
['sector'=>'mining','name_id'=>'Nikel','name_en'=>'Nickel'],
['sector'=>'mining','name_id'=>'Tembaga','name_en'=>'Copper'],
['sector'=>'mining','name_id'=>'Emas','name_en'=>'Gold'],
['sector'=>'mining','name_id'=>'Timah','name_en'=>'Tin'],
['sector'=>'mining','name_id'=>'Bauksit','name_en'=>'Bauxite'],
['sector'=>'mining','name_id'=>'Bijih Besi','name_en'=>'Iron Ore'],
['sector'=>'mining','name_id'=>'Mangan','name_en'=>'Manganese'],
['sector'=>'mining','name_id'=>'Mineral Industri','name_en'=>'Industrial Minerals'],
['sector'=>'mining','name_id'=>'Panas Bumi (Geothermal)','name_en'=>'Geothermal'],
['sector'=>'mining','name_id'=>'Jasa Pertambangan','name_en'=>'Mining Services'],
        ]);
    }
}
