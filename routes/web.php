<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProv'id'er and all of them will
| be assigned to the "web" m'id'dleware group. Make something great!
|
*/

Route::get('/', function () {
    $navLinks = [
        [
            'id'=> 1,
            'title'=> "characters",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 2,
            'title'=> "comics",
            'url'=> "#",
            'active'=> true,
        ],
        [
            'id'=> 3,
            'title'=> "movies",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 4,
            'title'=> "tv",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 5,
            'title'=> "games",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 6,
            'title'=> "collectibles",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 7,
            'title'=> "videos",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 8,
            'title'=> "fans",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 9,
            'title'=> "news",
            'url'=> "#",
            'active'=> false,
        ],
        [
            'id'=> 10,
            'title'=> "shop",
            'url'=> "#",
            'active'=> false,
        ]
    ];

    $dcComixLinks = [
        [
            'id'=> 1,
            'title'=> "characters",
            'url'=> "#",
        ],
        [
            'id'=> 2,
            'title'=> "comics",
            'url'=> "#",
        ],
        [
            'id'=> 3,
            'title'=> "movies",
            'url'=> "#",
        ],
        [
            'id'=> 4,
            'title'=> "tv",
            'url'=> "#",
        ],
        [
            'id'=> 5,
            'title'=> "games",
            'url'=> "#",
        ],
        [
            'id'=> 6,
            'title'=> "videos",
            'url'=> "#",
        ],
        [
            'id'=> 7,
            'title'=> "news",
            'url'=> "#",
        ],
    ];
    $shopLinks = [
        [
            'id'=> 1,
            'title'=> "Shop DC",
            'url'=> "#"
        ],
        [
            'id'=> 2,
            'title'=> "Shop DC Collectibles",
            'url'=> "#"
        ],
    ];
    $dcLinks = [
        [
            'id'=> 1,
            'title'=> "Terms of Use",
            'url'=> "#",
        ],
        [
            'id'=> 2,
            'title'=> "Privacy policy(New)",
            'url'=> "#",
        ],
        [
            'id'=> 3,
            'title'=> "Ad Choices",
            'url'=> "#",
        ],
        [
            'id'=> 4,
            'title'=> "Advertising",
            'url'=> "#",
        ],
        [
            'id'=> 5,
            'title'=> "Jobs",
            'url'=> "#",
        ],
        [
            'id'=> 6,
            'title'=> "Subscriptions",
            'url'=> "#",
        ],
        [
            'id'=> 7,
            'title'=> "Talent Workshops",
            'url'=> "#",
        ],
        [
            'id'=> 8,
            'title'=> "CPSC Certificates",
            'url'=> "#",
        ],
        [
            'id'=> 9,
            'title'=> "Ratings",
            'url'=> "#",
        ],
        [
            'id'=> 10,
            'title'=> "Shop Help",
            'url'=> "#",
        ],
        [
            'id'=> 11,
            'title'=> "Contact Us",
            'url'=> "#",
        ],

    ];
    $sitesLinks = [
        [
            'id'=> 1,
            'title'=> "DC",
            'url'=> "#",
        ],
        [
            'id'=> 2,
            'title'=> "MAD Magazine",
            'url'=> "#",
        ],
        [
            'id'=> 3,
            'title'=> "DC Kids",
            'url'=> "#",
        ],
        [
            'id'=> 4,
            'title'=> "DC Universe",
            'url'=> "#",
        ],
        [
            'id'=> 5,
            'title'=> "DC Powe Visa",
            'url'=> "#",
        ],

    ];

    return view('pages.home', compact('navLinks','dcComixLinks','shopLinks',
    'dcLinks','sitesLinks' ));
})->name('guest.home');
