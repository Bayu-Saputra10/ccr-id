<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            SubsectorSeeder::class,

            // infrastruktur
            InfrastructureSeeder::class,
            InfrastructureScoreSeeder::class,
            InfrastructureEvidenceSeeder::class,

            // manufaktur
            ManufacturingSeeder::class,
            ManufacturingScoreSeeder::class,
            ManufacturingEvidenceSeeder::class,

            // agrikultur
            AgricultureSeeder::class,
            AgricultureScoreSeeder::class,
            AgricultureEvidenceSeeder::class,

            // keuangan
            FinanceSeeder::class,
            FinanceScoreSeeder::class,
            FinanceEvidenceSeeder::class,

            // energi & tambang
            MiningSeeder::class,
            MiningScoreSeeder::class,
            MiningEvidenceSeeder::class,

            InterpretationResultSeeder::class,

            ManagementRecommendationSeeder::class,

            DimensionInterpretationSeeder::class,
        ]);
    }
}
