<?php

namespace Database\Seeders;

use App\Models\CategoryRule;
use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryRuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Accréditation et Réputation ', 'description' => ''], //1
            ['name' => "Qualité de l'Enseignement", 'description' => ''], //2
            ['name' => "Recherche et innovation", 'description' => ''], //3
            ['name' => "Infrastructures et Équipements", 'description' => ''], //4
            ['name' => "Serivce aux Étudiants ", 'description' => ''], //5
            ['name' => "Engagement Communautaire et Social ", 'description' => ''], //6
            ['name' => "Performance Financière", 'description' => ''], //7
            ['name' => "Diversité et inclusion", 'description' => ''], //8
        ];

        $rules = [
            [
                'category_rule_id'=>1,
                'libelle'=>"Accréditations institutionnelles et professionnelles.",
            ],
            [
                'category_rule_id'=>1,
                'libelle'=>"Classements nationaux et internationaux.",
            ],
            [
                'category_rule_id'=>1,
                'libelle'=>"Réputation académique et professionnelle de l'école.",
            ],
            //2
            [
                'category_rule_id'=>2,
                'libelle'=>"Qualifications et compétences des enseignants..",
            ],
            [
                'category_rule_id'=>2,
                'libelle'=>"Ratio enseignant-étudiant.",
            ],
            [
                'category_rule_id'=>2,
                'libelle'=>"Utilisation de méthodes pédagogiques innovantes",
            ],
            [
                'category_rule_id'=>2,
                'libelle'=>"Évaluation de la satisfaction des étudiants à l'égard de l'enseignement.",
            ],
            //3
            [
                'category_rule_id'=>3,
                'libelle'=>"Production académique et scientifique (publications, brevets, etc.).",
            ],
            [
                'category_rule_id'=>3,
                'libelle'=>"Financement de la recherche.",
            ],
            [
                'category_rule_id'=>3,
                'libelle'=>"Collaboration avec des partenaires industriels ou d'autres institutions de recherche.",
            ],
            //4
            [
                'category_rule_id'=>4,
                'libelle'=>"Bâtiments modernes et bien entretenus.",
            ],
            [
                'category_rule_id'=>4,
                'libelle'=>"Laboratoires équipés de matériel de pointe.",
            ],
            [
                'category_rule_id'=>4,
                'libelle'=>"Bibliothèques avec des collections riches et des ressources électroniques.",
            ],
            //5
            [
                'category_rule_id'=>5,
                'libelle'=>"Services d'orientation académique et professionnelle.",
            ],
            [
                'category_rule_id'=>5,
                'libelle'=>"Services de santé et de bien-être étudiant.",
            ],
            [
                'category_rule_id'=>5,
                'libelle'=>"Programmes de soutien financier et d'aide aux étudiants.",
            ],
            //6
            [
                'category_rule_id'=>6,
                'libelle'=>"Projets de service communautaire et de responsabilité sociale.",
            ],
            [
                'category_rule_id'=>6,
                'libelle'=>"Partenariats avec des organisations locales et internationales.",
            ],
            [
                'category_rule_id'=>6,
                'libelle'=>"Contributions à la vie culturelle et économique de la région.",
            ],
            //7
            [
                'category_rule_id'=>7,
                'libelle'=>"Stabilité financière de l'école.",
            ],
            [
                'category_rule_id'=>7,
                'libelle'=>"Gestion responsable des ressources.",
            ],
            [
                'category_rule_id'=>7,
                'libelle'=>"Transparence financière et conformité aux normes comptables.",
            ],
            //8
            [
                'category_rule_id'=>8,
                'libelle'=>"Promotion de la diversité culturelle, ethnique, et de genre.",
            ],
            [
                'category_rule_id'=>8,
                'libelle'=>"Initiatives pour favoriser l'inclusion et l'équité.",
            ],
            [
                'category_rule_id'=>8,
                'libelle'=>"Politiques et programmes pour soutenir les étudiants issus de milieux sous-représentés.",
            ],
        ];

        foreach ($categories as $key => $value) {
            CategoryRule::create($value);
        }

        foreach ($rules as $key => $val) {
            Rule::create($val);
        }
    }
}
