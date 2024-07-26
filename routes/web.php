<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = 'Home | Wilhelmus Ole';

    $projects = [
        [
            'title' => 'Philippine Currency Identifier',
            'description' => 'Philippine currency identifier',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'philippinecurrency.jpg'
            ],
            'project_showcase' => null,
            'link' => 'https://github.com/wilhelmusolejr/Philippine-Currency-Identifier'
        ],
        [
            'title' => 'Mobhie',
            'description' => 'Movie website platform',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'mobhie.webp',
                'portfolio' => 'mobhie.jpg'
            ],
            'project_showcase' => 1,
            'link' => 'https://github.com/wilhelmusolejr/Mobhie'
        ],
        [
            'title' => 'PennyWISE PH',
            'description' => 'Money tracker application',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'pennywise.webp',
                'portfolio' => 'pennywise.jpg'
            ],
            'project_showcase' => 4,
            'link' => 'https://github.com/wilhelmusolejr/PennyWISE'
        ],
        [
            'title' => 'Consultation Clinic',
            'description' => 'Online Consultation Clinic',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'clinic.webp',
                'portfolio' => 'clinic.jpg'
            ],
            'project_showcase' => 2,
            'link' => 'https://github.com/wilhelmusolejr/Online-appointment-and-consultation-clinic'
        ],
        [
            'title' => 'Jollymax BOT',
            'description' => 'Bot for auto buy',
            'type' => ['automate'],
            'file' => [
                'intro' => null,
                'portfolio' => 'jollymax_bot.jpg'
            ],
            'project_showcase' => null,
            'link' => 'project/jollymax'
        ],
        [
            'title' => 'Tech Vuitton',
            'description' => 'Minimalist high tech design',
            'type' => ['design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'techvouitton.jpg'
            ],
            'project_showcase' => null,
            'link' => 'project/tech-vuitton'
        ],
        [
            'title' => 'Shopeeling',
            'description' => 'E-commerce application',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => 'shopeeling.webp',
                'portfolio' => 'shopeeling.jpg'
            ],
            'project_showcase' => 3,
            'link' => 'project/shopeeling'
        ],
        [
            'title' => 'Money Tracker v1',
            'description' => 'Money Tracker',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'money_tracker_v1.jpg'
            ],
            'project_showcase' => null,
            'link' => 'project/money-tracker-v1'
        ],
        [
            'title' => 'Gcash BOT',
            'description' => 'Bot for auto create account',
            'type' => ['automate'],
            'file' => [
                'intro' => null,
                'portfolio' => 'gcash_bot.jpg'
            ],
            'project_showcase' => null,
            'link' => 'project/gcash'
        ],
        [
            'title' => 'NFT marketplace',
            'description' => 'NFT marketplace site',
            'type' => ['design'],
            'file' => [
                'intro' => 'nft.webp',
                'portfolio' => 'nft.jpg'
            ],
            'project_showcase' => 5,
            'link' => 'project/nft-marketplace'
        ],
        [
            'title' => 'Microsoft Reward BOT',
            'description' => 'Bot for auto grind points',
            'type' => ['automate'],
            'file' => [
                'intro' => null,
                'portfolio' => 'microsoft_bot.jpg'
            ],
            'project_showcase' => null,
            'link' => 'project/microsoft-reward'
        ],
        [
            'title' => 'Netflakes',
            'description' => 'Movie website platform',
            'type' => ['develop', 'design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'netflakes.jpg'
            ],
            'project_showcase' => null,
            'link' => 'project/netflakes'
        ],
        [
            'title' => 'E-commerce',
            'description' => 'E-commerce application',
            'type' => ['design'],
            'file' => [
                'intro' => null,
                'portfolio' => 'ecommerce.jpg'
            ],
            'project_showcase' => null,
            'link' => 'project/e-commerce'
        ]
    ];

    $showcaseProjects = array_filter($projects, function($project) {
        return !is_null($project['project_showcase']);
    });

    usort($showcaseProjects, function($a, $b) {
        return $a['project_showcase'] - $b['project_showcase'];
    });

    return view('welcome', [
        'projects' => $showcaseProjects,
        'title'=> $title
    ]);
}) -> name('home');

Route::get('/about', function () {

    $title = 'About | Wilhelmus Ole';

    $projects = [
        [
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
        ],
        [
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
            'title' => 'Gcash BOT',
            'description' => 'Bot for auto create account',
            'type' => ['automate'],
            'file' => [
                'intro' => null,
                'portfolio' => 'gcash_bot.jpg'
            ],
            'project_showcase' => null,
            'link' => [
                'github' => 'https://github.com/wilhelmusolejr/Gcash-BOT',
                'project' => 'gcash'
            ]
        ],
        [
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
        ]
    ];

    return view('about', [
        'projects' => $projects,
        'title'=> $title
    ]);
}) -> name('about');

Route::get('/project/philippine-currency-identifier', function() {
    $title = 'Home | Wilhelmus Ole';

    return view('projects/philippine-currency-identifier');
}) -> name('philippine-currency-identifier');

Route::get('/project/mobhie', function() {
    $title = 'Home | Wilhelmus Ole';

    return view('projects/mobhie');
}) -> name('mobhie');

Route::get('/project/pennywise', function() {
    $title = 'Home | Wilhelmus Ole';

    return view('projects/pennywise');
}) -> name('pennywise');

Route::get('/project/online-appointment-and-consultation-clinic', function() {
    $title = 'Home | Wilhelmus Ole';

    return view('projects/online-appointment-and-consultation-clinic');
}) -> name('online-appointment-and-consultation-clinic');