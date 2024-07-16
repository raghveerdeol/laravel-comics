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
            'url'=> "/comics",
            'active'=> false,
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
            'url'=> "/",
            'active'=> true,
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
    $shops = [
        [
            'id'=> 1,
            'title'=> "digital comics",
            'img'=> 'resources/img/buy-comics-digital-comics.png',
        ],
        [
            'id'=> 2,
            'title'=> "dc merchandise",
            'img'=> 'resources/img/buy-comics-merchandise.png',
        ],
        [
            'id'=> 3,
            'title'=> "subscription",
            'img'=> 'resources/img/buy-comics-subscriptions.png',
        ],
        [
            'id'=> 4,
            'title'=> "comic shop locator",
            'img'=> 'resources/img/buy-comics-shop-locator.png',
        ],
        [
            'id'=> 5,
            'title'=> "dc power visa",
            'img'=> 'resources/img/buy-dc-power-visa.svg',
        ],

    ];
    $icons = [
        [
            'id'=> 1,
            'img'=> 'resources/img/footer-facebook.png',
            'active'=> false,
        ],
        [
            'id'=> 2,
            'img'=> 'resources/img/footer-twitter.png',
            'active'=> false,
        ],
        [
            'id'=> 3,
            'img'=> 'resources/img/footer-youtube.png',
            'active'=> false,
        ],
        [
            'id'=> 4,
            'img'=> 'resources/img/footer-pinterest.png',
            'active'=> false,
        ],
        [
            'id'=> 5,
            'img'=> 'resources/img/footer-periscope.png',
            'active'=> false,
        ],
    ];

    return view('pages.home', compact('navLinks','dcComixLinks','shopLinks',
    'dcLinks','sitesLinks','shops', 'icons' ));
})->name('guest.home');

Route::get('/comics', function(){
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
            'url'=> "/comics",
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
            'url'=> "/",
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
    $shops = [
        [
            'id'=> 1,
            'title'=> "digital comics",
            'img'=> 'resources/img/buy-comics-digital-comics.png',
        ],
        [
            'id'=> 2,
            'title'=> "dc merchandise",
            'img'=> 'resources/img/buy-comics-merchandise.png',
        ],
        [
            'id'=> 3,
            'title'=> "subscription",
            'img'=> 'resources/img/buy-comics-subscriptions.png',
        ],
        [
            'id'=> 4,
            'title'=> "comic shop locator",
            'img'=> 'resources/img/buy-comics-shop-locator.png',
        ],
        [
            'id'=> 5,
            'title'=> "dc power visa",
            'img'=> 'resources/img/buy-dc-power-visa.svg',
        ],

    ];
    $comicsList = [
        [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
            "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
            "price" => "$19.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book",
        ],
        [
            "title" => "American Vampire 1976 #1",
            "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
            "thumb" => "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "sale_date" => "2020-10-06",
            "type" => "comic book",
        ],
        [
            "title" => "Aquaman Vol. 4: Underworld",
            "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
            "thumb" => "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
            "price" => "$16.99",
            "series" => "Aquaman",
            "sale_date" => "2018-01-24",
            "type" => "graphic novel",
        ],
        [
            "title" => "Batgirl #1",
            "description" => "“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.",
            "thumb" => "https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg",
            "price" => "$2.99",
            "series" => "Batgirl",
            "sale_date" => "2016-07-27",
            "type" => "comic book",
        ],
        [
            "title" => "Batman #56",
            "description" => "The Dark Knight’s looking to drop both the hammer and sickle on the KGBeast, whose rampage across Gotham City takes a toll on Nightwing when he’s injured in the fray. Blaming himself for his ward’s fate, Batman gets grimmer than usual—and vows to take the Russian assassin down like the Berlin Wall. Is even Gotham City ready for that much violence? The streets will run red like borscht if the Dark Knight gets his way against this Soviet scourge.",
            "thumb" => "https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg",
            "price" => "$3.99",
            "series" => "Batman",
            "sale_date" => "2018-10-03",
            "type" => "comic book",
        ],
        [
            "title" => "Batman Beyond #1",
            "description" => "“THE RETURN” part one! Terry McGinnis is back as Batman, much to the delight of his family and friends. But is the original Joker really back as well? Inspired by the possible return of their role model, the Jokerz have taken over an entire section of Gotham City and are determined to wreak havoc in the still-rebuilding city. While Batman battles chaos on the streets, his friend Dana is at the mercy of the new leader of the now-unified gang.",
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg",
            "price" => "$2.99",
            "series" => "Batman Beyond",
            "sale_date" => "2016-10-26",
            "type" => "comic book",
        ],
        [
            "title" => "Batman/Superman #1",
            "description" => "Up in the sky, in the dark of the night, trust no one - for the infected walk among us. Spinning out of the devastating events of THE BATMAN WHO LAUGHS, Superman and Batman are together once more in an all-new monthly series - and they're facing a terrifying new threat that could strike from anywhere. The Dark Knight and the Man of Steel must journey into the depths of Gotham City to learn which of their fellow heroes has been transformed into the horrifying horseman of their most dangerous and deranged foe ever. Our heroes will need to fight to survive, but an even more dangerous question lurkes in the shadows: Can Superman and Batman even trust each other?",
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg",
            "price" => "$3.99",
            "series" => "Batman/Superman",
            "sale_date" => "2019-08-28",
            "type" => "comic book",
        ],
        [
            "title" => "Batman/Superman Annual #1",
            "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman, who would win? The combatants? Mr. Mxyzptlk and Bat-Mite. And in this battle for the ages, you will find out if a fifth-dimensional imp can bleed. It’s all in this, the ultimate slugfest between the Dark Knight and the Man of Steel-plus a whole lot of magic!",
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg",
            "price" => "$4.99",
            "series" => "Batman/Superman Annual",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
        ],
        [
            "title" => "Batman: The Joker War Zone #1",
            "description" => "Gotham City is a battleground as The Joker takes over the Wayne fortune and wages a street war against the Dark Knight and his allies! Enter the “war zone” with short stories featuring characters like Cassandra Cain, Stephanie Brown, and Luke Fox and see how they’re fighting back in a city under siege! Also, the brutal full debut of the mysterious new anti-hero known as Clownhunter!",
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg",
            "price" => "$5.99",
            "series" => "Batman: The Joker War Zone",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
        ],
        [
            "title" => "Batman: Three Jokers #1",
            "description" => "Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you’ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It’s a mystery unlike any Batman has ever faced!",
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg",
            "price" => "$6.99",
            "series" => "Batman: Three Jokers",
            "sale_date" => "2020-08-25",
            "type" => "comic book",
        ],
        [
            "title" => "Batman: White Knight Presents: Harley Quinn #1",
            "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg",
            "price" => "$4.99",
            "series" => "Batman: White Knight Presents: Harley Quinn",
            "sale_date" => "2020-10-20",
            "type" => "comic book",
        ],
        [
            "title" => "Catwoman Vol. 1: Copycats",
            "description" => "Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City. As Selina cracks the whip on her former criminal cohorts, she’s attracting unwanted attention from one of Gotham’s most dangerous groups. The mob? Nope. Try the GCPD. And as if the Bat-Bride didn’t have enough problems, don’t miss the debut of an all-new villain determined to make trouble for all nine of Selina’s lives. Collects issues #1-6 of Catwoman’s new series.",
            "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg",
            "price" => "$16.99",
            "series" => "Catwoman",
            "sale_date" => "2019-04-10",
            "type" => "graphic novel",
        ]
    ];
    $icons = [
        [
            'id'=> 1,
            'img'=> 'resources/img/footer-facebook.png',
            'active'=> false,
        ],
        [
            'id'=> 2,
            'img'=> 'resources/img/footer-twitter.png',
            'active'=> false,
        ],
        [
            'id'=> 3,
            'img'=> 'resources/img/footer-youtube.png',
            'active'=> false,
        ],
        [
            'id'=> 4,
            'img'=> 'resources/img/footer-pinterest.png',
            'active'=> false,
        ],
        [
            'id'=> 5,
            'img'=> 'resources/img/footer-periscope.png',
            'active'=> false,
        ],
    ];
    return view('pages.comics', compact('navLinks','dcComixLinks','shopLinks',
    'dcLinks','sitesLinks', 'comicsList','shops', 'icons'));
})->name('guest.comics');
