<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\SchoolSector;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->truncate();
        DB::table('school_sectors')->truncate();
        $schools = [
            //1
            [
                'name' => "IAI TOGO",
                'description' => "Institut Africaine d'Informatique",
                "address" => "Lomé, Nyékonakpoè",
                "contact" => "22334455",
                "email" => "iai-togo@tg.com",
                "site_web" => "iai-togo.tg",
                "responsable" => [
                    "nom" => "AGBETI",
                    "prenoms" => "Yawo",
                    "email" => "agbetiyawo@gmail.com",
                    "phone" => "90807060"
                ],
                'infrastructure' => [
                    [
                        'category' => "Bâtiment",
                        'items' => [
                            "Salles de classe équipées de tableaux blancs interactifs, de projecteurs et d'accès Internet.",
                            "Laboratoires informatiques avec des ordinateurs et des logiciels spécialisés.",
                            "Salles de conférence pour les séminaires et les événements académiques.",
                            "Bibliothèque avec une vaste collection de livres, de périodiques et d'accès en ligne à des bases de données académiques."
                        ]
                    ],
                    [
                        'category' => "TIC",
                        'items' => [
                            "Réseaux Wi-Fi haut débit dans tout le campus.",
                            "Stations de travail informatiques et bornes d'impression réparties dans les différents bâtiments.",
                            "Systèmes de gestion de l'apprentissage en ligne pour la diffusion de cours et de ressources pédagogiques.",
                        ]
                    ],
                    [
                        'category' => "Restauration",
                        'items' => [
                            "Cafétérias offrant une variété d'options alimentaires saines et équilibrées"
                        ]
                    ],
                    [
                        'category' => "Installations Sportives",
                        'items' => [
                            "Terrains de sport pour le football, le basketball, le tennis, etc",
                            "Salle de gym avec équipement de musculation et de cardio.",
                            "Piscine pour les activités aquatiques et les compétitions sportives."
                        ]
                    ]
                ]
            ],
            //2
            [
                'name' => "UK",
                "description" => "Université de KARA",
                'address' => "Kara, Université de Kara",
                'contact' => "22846464",
                'email' => "univ-kara@tg.com",
                'site_web' => "univ-kara.tg",
                'responsable' => [
                    "nom" => "KOUAME",
                    "prenoms" => "Michel",
                    "email" => "kouamemichel@univ-kara.tg",
                    "phone" => "90706050"
                ],
                'infrastructure' => [
                    [
                        'category' => "Bâtiment",
                        'items' => [
                            "Amphithéâtres modernes et climatisés.",
                            "Laboratoires de recherche équipés d'appareils de pointe.",
                            "Bibliothèque numérique avec accès à des millions de ressources.",
                            "Résidences universitaires pour les étudiants."
                        ]
                    ],
                    [
                        'category' => "TIC",
                        'items' => [
                            "Connexion Wi-Fi haut débit dans tout le campus.",
                            "Plateforme d'apprentissage en ligne pour des cours interactifs.",
                            "Laboratoires informatiques avec des logiciels spécialisés pour chaque discipline.",
                            "Assistance informatique disponible pour les étudiants et les enseignants."
                        ]
                    ],
                    [
                        'category' => "Restauration",
                        'items' => [
                            "Restaurant universitaire proposant des repas abordables et variés.",
                            "Cafétérias et snacks pour les collations et les boissons.",
                            "Aire de pique-nique extérieure pour les beaux jours."
                        ]
                    ],
                    [
                        'category' => "Installations Sportives",
                        'items' => [
                            "Complexe sportif avec piscine olympique, terrains de football et de basketball.",
                            "Salle de sport équipée d'appareils de musculation et de fitness.",
                            "Terrains de tennis et de volleyball pour les amateurs de sports de raquette."
                        ]
                    ]
                ]
            ],
            //3
            [
                'name' => "ULSH",
                'description' => "Université des Lettres et des Sciences Humaines de Lomé (ULSH)",
                'address' => "Lomé, Campus de Lomé",
                'contact' => "22840404",
                'email' => "ulsh@univ-lome.tg",
                'site_web' => "ulsh.tg",
                'responsable' => [
                    "nom" => "AMEGNON",
                    "prenoms" => "Kodjo",
                    "email" => "amegnonkodjo@ulsh.tg",
                    "phone" => "90504030"
                ],
                'infrastructure' => [
                    [
                        'category' => "Bâtiment",
                        'items' => [
                            "Bâtiments anciens et historiques rénovés.",
                            "Bibliothèque centrale avec un fonds documentaire riche en sciences humaines.",
                            "Salles de classe polyvalentes et amphithéâtres modernes.",
                            "Espaces verts et jardins pour la détente des étudiants."
                        ]
                    ],
                    [
                        'category' => "TIC",
                        'items' => [
                            "Accès Wi-Fi dans les bibliothèques et les salles de classe.",
                            "Laboratoires informatiques pour la recherche et la formation.",
                            "Plateforme d'enseignement à distance pour des cours en ligne.",
                            "Assistance informatique pour les étudiants et les enseignants."
                        ]
                    ],
                    [
                        'category' => "Restauration",
                        'items' => [
                            "Restaurant universitaire proposant des repas abordables.",
                            "Cafétérias et snacks pour les collations et les boissons.",
                            "Bars et restaurants à proximité du campus pour les repas en soirée."
                        ]
                    ],
                    [
                        'category' => "Installations Sportives",
                        'items' => [
                            "Terrain de sport pour le football et le basketball.",
                            "Salle de sport équipée d'appareils de musculation.",
                            "Salles de danse et de yoga pour les activités physiques et de bien-être."
                        ]
                    ]
                ]
            ],
            //4
            [
                'name' => "ISM",
                'description' => "Institut Supérieur de Management (ISM)",
                'address' => "Lomé, Agbalépédogan",
                'contact' => "22845454",
                'email' => "ism-lome@ism.tg",
                'site_web' => "ism-lome.com",
                'responsable' => [
                    "nom" => "YETOGBE",
                    "prenoms" => "Essé",
                    "email" => "yetogbess@ism-lome.com",
                    "phone" => "90403020"
                ],
                'infrastructure' => [
                    [
                        'category' => "Bâtiment",
                        'items' => [
                            "Bâtiments modernes et élégants.",
                            "Salles de classe climatisées et équipées de matériel pédagogique de pointe.",
                            "Bibliothèque spécialisée en sciences de gestion et d'administration des entreprises.",
                            "Centre d'incubation d'entreprises pour les étudiants entrepreneurs."
                        ]
                    ],
                    [
                        'category' => "TIC",
                        'items' => [
                            "Réseau Wi-Fi haut débit dans tout l'établissement.",
                            "Plateforme d'apprentissage en ligne pour des cours interactifs.",
                            "Laboratoires informatiques avec des logiciels professionnels.",
                            "Support informatique personnalisé pour les étudiants et les enseignants."
                        ]
                    ],
                    [
                        'category' => "Restauration",
                        'items' => [
                            "Restaurant gastronomique proposant des menus raffinés.",
                            "Cafétéria et snacks pour les pauses gourmandes.",
                            "Terrasse panoramique pour les repas en plein air."
                        ]
                    ],
                    [
                        'category' => "Installations Sportives",
                        'items' => [
                            "Salle de sport équipée d'appareils de musculation et de cardio.",
                            "Terrain de sport pour le football et le basketball.",
                            "Salles de yoga et de Pilates pour les amateurs de bien-être."
                        ]
                    ]
                ]
            ],
            //5
            [
                'name' => "ESGIS TOGO",
                'description' => "Ecole Supérieure de Gestion et d'Informatique du Togo",
                'address' => "Lomé, Bè-Kpota",
                'contact' => "22843434",
                'email' => "esgis-togo@esgis.tg",
                'site_web' => "esgis.tg",
                'responsable' => [
                    "nom" => "KOFFI",
                    "prenoms" => "Komlan",
                    "email" => "koffikomlan@esgis.tg",
                    "phone" => "90302010"
                ],
                'infrastructure' => [
                    [
                        'category' => "Bâtiment",
                        'items' => [
                            "Bâtiments modernes et écologiques.",
                            "Salles de classe spacieuses et bien équipées.",
                            "Laboratoires informatiques de pointe pour la formation en informatique.",
                            "Amphithéâtres climatisés pour les cours magistraux.",
                            "Bibliothèque riche en ressources documentaires en sciences de gestion et d'informatique."
                        ]
                    ],
                    [
                        'category' => "TIC",
                        'items' => [
                            "Réseau Wi-Fi haut débit dans tout l'établissement.",
                            "Plateforme d'apprentissage en ligne pour des cours interactifs et accessibles à distance.",
                            "Laboratoires de recherche en informatique et en gestion.",
                            "Support informatique dédié aux étudiants et aux enseignants."
                        ]
                    ],
                    [
                        'category' => "Restauration",
                        'items' => [
                            "Restaurant universitaire proposant des repas abordables et variés.",
                            "Cafétéria et snacks pour les collations et les boissons.",
                            "Espaces verts aménagés pour les pique-niques en plein air."
                        ]
                    ],
                    [
                        'category' => "Installations Sportives",
                        'items' => [
                            "Complexe sportif avec salle de sport, terrains de football et de basketball.",
                            "Piscine semi-olympique pour la natation et les cours d'aquagym.",
                            "Espaces verts et parcours de santé pour la détente et le bien-être des étudiants."
                        ]
                    ]
                ]
            ]

        ];

        foreach ($schools as $key => $value) {
            School::create($value);
        }

        $schools_sectors = [
            ['school_id'=>1,'sector_id'=>1],
            //2
            ['school_id'=>2,'sector_id'=>1],
            ['school_id'=>2,'sector_id'=>2],
            ['school_id'=>2,'sector_id'=>3],
            ['school_id'=>2,'sector_id'=>4],
            ['school_id'=>2,'sector_id'=>5],
            ['school_id'=>2,'sector_id'=>6],
            //3
            ['school_id'=>3,'sector_id'=>8],
            ['school_id'=>3,'sector_id'=>9],
            //4
            ['school_id'=>4,'sector_id'=>11],
            ['school_id'=>4,'sector_id'=>12],
            ['school_id'=>4,'sector_id'=>13],
            //5
            ['school_id'=>5,'sector_id'=>1],
            ['school_id'=>5,'sector_id'=>4],
            ['school_id'=>5,'sector_id'=>5],
            ['school_id'=>5,'sector_id'=>12],
            ['school_id'=>5,'sector_id'=>13],
        ];

        foreach ($schools_sectors as $key => $sector) {
            SchoolSector::create($sector);
        }
    }

}
