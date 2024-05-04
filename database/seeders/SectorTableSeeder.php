<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sectors')->truncate();
        $sectors = [
            ['libelle' => 'Informatique'],
            ['libelle' => 'Génie civil'],
            ['libelle' => 'Médecine'],
            ['libelle' => 'Sciences politiques'],
            ['libelle' => 'Gestion d\'entreprise'],
            ['libelle' => 'Agriculture'],
            ['libelle' => 'Éducation'],
            ['libelle' => 'Langues et littératures'],
            ['libelle' => 'Droit'],
            ['libelle' => 'Architecture'],
            ['libelle' => 'Marketing'],
            ['libelle' => 'Communication des entreprises'],
            ['libelle' => 'Commerce international'],
        ];

        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
