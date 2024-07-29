<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller {
    // Class property to store projects data
    protected $projects = [
        [
            'id' => 1,
            'title' => 'E-commerce',
            'description' => 'E-commerce application',
            'type' => ['design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'ecommerce.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/E-commerce',
                'project' => 'e-commerce'
            ]
        ],
        [
            'id' => 2,
            'title' => 'Netflakes',
            'description' => 'Movie website platform',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'netflakes.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Netflakes',
                'project' => 'netflakes'
            ]
        ],
        [
            'id' => 3,
            'title' => 'Microsoft Reward BOT',
            'description' => 'Bot for auto grind points',
            'type' => ['automate'],
            'file' => [
                'intro' => null,
                'portfolio' => 'microsoft_bot.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Microsoft-Reward-BOT',
                'project' => 'microsoft-reward'
            ]
        ],
        [
            'id' => 4,
            'title' => 'NFT marketplace',
            'description' => 'NFT marketplace site',
            'type' => ['design'],
            'file' => [
                'intro' => 'nft.webp',
                'portfolio' => 'nft.jpg'
            ],
            'project_showcase' => 5,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/NFT-Marketplace',
                'project' => 'nft-marketplace'
            ]
        ],
        [
            'id' => 5,
            'title' => 'GC4SH PH',
            'description' => 'Bot for auto create account',
            'type' => ['automate'],
            'file' => [
                'intro' => null,
                'portfolio' => 'gcash_bot.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/GC4SH-PH',
                'project' => 'gc4sh'
            ]
        ],
        [
            'id' => 6,
            'title' => 'Money Tracker v1',
            'description' => 'Money Tracker',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'money_tracker_v1.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Money-Tracker-v1',
                'project' => 'money-tracker-v1'
            ]
        ],
        [
            'id' => 7,
            'title' => 'Shopeeling',
            'description' => 'E-commerce application',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'shopeeling.webp',
                'portfolio' => 'shopeeling.jpg'
            ],
            'project_showcase' => 3,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Shopeeling',
                'project' => 'shopeeling'
            ]
        ],
        [
            'id' => 8,
            'title' => 'DASS Depression Level Predictor',
            'description' => "Predicts person's depression level",
            'type' => ['develop'],
            'file' => [
                'intro' => null,
                'portfolio' => 'depression.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/DASS-Depressioon-Level-Predictor',
                'project' => 'dass-Depressioon-Level-Predictor'
            ]
            ],
        [
            'id' => 9,
            'title' => 'Tech Vuitton',
            'description' => 'Minimalist high tech design',
            'type' => ['design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'techvouitton.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Tech-Vuitton',
                'project' => 'tech-vuitton'
            ]
        ],
        [
            'id' => 10,
            'title' => 'Jollymax BOT',
            'description' => 'Bot for auto buy',
            'type' => ['automate'],
            'file' => [
                'intro' => null,
                'portfolio' => 'jollymax_bot.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Jollymax-BOT',
                'project' => 'jollymax'
            ]
        ],
        [
            'id' => 11,
            'title' => 'Consultation Clinic',
            'description' => 'Online Consultation Clinic',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'clinic.webp',
                'portfolio' => 'clinic.jpg'
            ],
            'project_showcase' => 2,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Online-appointment-and-consultation-clinic',
                'project' => 'online-appointment-and-consultation-clinic'
            ]
        ],
        [
            'id' => 12,
            'title' => 'PennyWISE PH',
            'description' => 'Money tracker application',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'pennywise.webp',
                'portfolio' => 'pennywise.jpg'
            ],
            'project_showcase' => 4,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/PennyWISE',
                'project' => 'pennywise'
            ]
        ],
        [
            'id' => 13,
            'title' => 'Mobhie',
            'description' => 'Movie website platform',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'mobhie.webp',
                'portfolio' => 'mobhie.jpg'
            ],
            'project_showcase' => 1,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Mobhie',
                'project' => 'mobhie'
            ]
        ],
        [
            'id' => 14,
            'title' => 'Philippine Currency Identifier',
            'description' => 'Philippine currency identifier',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'philippinecurrency.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Philippine-Currency-Identifier',
                'project' => 'philippine-currency-identifier'
            ]
        ]
    ];

    protected $name = 'Wilhelmus Ole';
    protected $project_info_path = 'img/Projects/Info/';

    // Index page
    public function index() {
        $title = $this -> generateTitle("Home");
        $projects = $this -> getProjects();

        $showcaseProjects = array_filter($projects, function($project) {
            return !is_null($project['project_showcase']);
        });

        usort($showcaseProjects, function($a, $b) {
            return $a['project_showcase'] - $b['project_showcase'];
        });

        return view('welcome', [
            'projects' => $showcaseProjects,
            'title' => $title
        ]);
    }

    // About page
    public function about() {
        $title = $this -> generateTitle("About");
        $projects = $this -> getProjects();

        return view('about', [
            'projects' => $projects,
            'title' => $title
        ]);
    }

    // PROJECTS
    // PROJECTS
    // PROJECTS
    // PROJECTS

    public function philippineCurrencyIdentifier() {
        $id = 14;
        $project = $this -> getProject($id);
        $title = $this -> generateTitle($project['title']);

        return view('projects.philippine-currency-identifier', [
            'project' => $project,
            'title' => $title,
            'projectPath' => $this -> project_info_path .'philippine-currency-identifier/'
        ]);
    }

    public function mobhie() {
        $id = 13;
        $project = $this -> getProject($id);
        $title = $this -> generateTitle($project['title']);

        return view('projects.mobhie', [
            'project' => $project,
            'title' => $title,
            'projectPath' => $this -> project_info_path .'mobhie/'
        ]);
    }

    public function pennywise() {
        $id = 12;
        $project = $this -> getProject($id);
        $title = $this -> generateTitle($project['title']);

        return view('projects.pennywise', [
            'project' => $project,
            'title' => $title,
            'projectPath' => $this -> project_info_path .'pennywise/'
        ]);
    }

    public function onlineAppointmentAndConsultationClinic() {
        $id = 11;
        $project = $this -> getProject($id);
        $title = $this -> generateTitle($project['title']);

        return view('projects.online-appointment-and-consultation-clinic', [
            'project' => $project,
            'title' => $title,
            'projectPath' => $this -> project_info_path .'online-appointment-and-consultation-clinic/'
        ]);
    }

    public function dassDepressioonLevelPredictor() {
        $id = 8;
        $project = $this -> getProject($id);
        $title = $this -> generateTitle($project['title']);

        return view('projects.dass-Depressioon-Level-Predictor', [
            'project' => $project,
            'title' => $title,
            'projectPath' => $this -> project_info_path .'dass-Depressioon-Level-Predictor/'
        ]);
    }

    //////////////////////////////////////////////////////
    protected function generateTitle($title) {
        return $title ." | ".$this->name;
    }

    public function getProjects() {

        $array = collect($this->projects)->sortBy('id')->reverse()->toArray();

        return $array;
    }

    public function getProject($id) {
        // Find the project by ID
        $project = collect($this->projects)->firstWhere('id', $id);

        if (!$project) {
            abort(404, 'Project not found');
        }

        return $project; ;
    }
}