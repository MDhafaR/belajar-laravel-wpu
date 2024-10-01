<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'nama' => 'Muhammad Dhafa Ramadhani',
        'email' => 'dhafa@gmail.com',
        'title' => 'about'
    ]);
});
Route::get('/blog', function () {
    $posts = [
        [
            'title' => 'Dunia Persilatan',
            'author' => 'Dhafa',
            'slug' => 'dunia_persilatan',
            'blog' => 'Dunia persilatan adalah sebuah ranah yang penuh dengan misteri dan kekuatan. Di dalamnya, para pendekar mengasah kemampuan fisik dan mental mereka, menguasai jurus-jurus mematikan, dan menjunjung tinggi nilai-nilai kehormatan. Dari pegunungan yang sunyi hingga lembah-lembah tersembunyi, cerita-cerita tentang pertarungan epik dan persaingan antar perguruan silat terus bergema, membentuk legenda yang akan diingat sepanjang masa.'
        ],
        [
            'title' => 'Teknologi AI dalam Kehidupan Sehari-hari',
            'author' => 'Lina',
            'slug' => 'tekonologi_ai_dalam_kehidupan_sehari-hari',
            'blog' => 'Kecerdasan Buatan (AI) telah menjadi bagian integral dari kehidupan modern. Dari asisten virtual di smartphone hingga sistem rekomendasi di platform streaming, AI terus mengubah cara kita berinteraksi dengan teknologi. Namun, di balik kemudahan yang ditawarkan, muncul pertanyaan-pertanyaan etis tentang privasi dan ketergantungan manusia pada mesin. Bagaimana kita dapat memanfaatkan potensi AI sambil tetap mempertahankan otonomi dan nilai-nilai kemanusiaan kita?'
        ],
        [
            'title' => 'Kuliner Nusantara: Warisan Rasa',
            'author' => 'Budi',
            'slug' => 'kuliner_nusantara_warisan_rasa',
            'blog' => 'Indonesia, dengan ribuan pulaunya, menyimpan kekayaan kuliner yang tak ternilai. Setiap daerah memiliki hidangan khasnya sendiri, mencerminkan sejarah, budaya, dan kearifan lokal masyarakatnya. Dari rendang yang terkenal hingga soto dengan berbagai variasinya, setiap suapan adalah sebuah perjalanan merasakan keberagaman Nusantara. Mari kita jelajahi kekayaan rasa ini dan apresiasi warisan kuliner yang telah diwariskan dari generasi ke generasi.'
        ],
        [
            'title' => 'Menjelajahi Alam Indonesia',
            'author' => 'Rina',
            'slug' => 'menjelajahi_alam_indonesia',
            'blog' => 'Indonesia adalah surga bagi para pecinta alam. Dengan gunung berapi yang menjulang, hutan tropis yang lebat, dan lautan yang kaya akan kehidupan bawah air, negeri ini menawarkan petualangan tak terbatas. Dari trekking di Gunung Rinjani hingga menyelam di Raja Ampat, setiap sudut Indonesia menyimpan keajaiban alam yang menakjubkan. Namun, di tengah keindahan ini, kita juga diingatkan akan pentingnya menjaga dan melestarikan alam agar dapat dinikmati oleh generasi mendatang.'
        ]
    ];
    return view('posts', [
        'title' => 'blog',
        'posts' => $posts,
    ]);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'title' => 'Dunia Persilatan',
            'author' => 'Dhafa',
            'slug' => 'dunia_persilatan',
            'blog' => 'Dunia persilatan adalah sebuah ranah yang penuh dengan misteri dan kekuatan. Di dalamnya, para pendekar mengasah kemampuan fisik dan mental mereka, menguasai jurus-jurus mematikan, dan menjunjung tinggi nilai-nilai kehormatan. Dari pegunungan yang sunyi hingga lembah-lembah tersembunyi, cerita-cerita tentang pertarungan epik dan persaingan antar perguruan silat terus bergema, membentuk legenda yang akan diingat sepanjang masa.'
        ],
        [
            'title' => 'Teknologi AI dalam Kehidupan Sehari-hari',
            'author' => 'Lina',
            'slug' => 'tekonologi_ai_dalam_kehidupan_sehari-hari',
            'blog' => 'Kecerdasan Buatan (AI) telah menjadi bagian integral dari kehidupan modern. Dari asisten virtual di smartphone hingga sistem rekomendasi di platform streaming, AI terus mengubah cara kita berinteraksi dengan teknologi. Namun, di balik kemudahan yang ditawarkan, muncul pertanyaan-pertanyaan etis tentang privasi dan ketergantungan manusia pada mesin. Bagaimana kita dapat memanfaatkan potensi AI sambil tetap mempertahankan otonomi dan nilai-nilai kemanusiaan kita?'
        ],
        [
            'title' => 'Kuliner Nusantara: Warisan Rasa',
            'author' => 'Budi',
            'slug' => 'kuliner_nusantara_warisan_rasa',
            'blog' => 'Indonesia, dengan ribuan pulaunya, menyimpan kekayaan kuliner yang tak ternilai. Setiap daerah memiliki hidangan khasnya sendiri, mencerminkan sejarah, budaya, dan kearifan lokal masyarakatnya. Dari rendang yang terkenal hingga soto dengan berbagai variasinya, setiap suapan adalah sebuah perjalanan merasakan keberagaman Nusantara. Mari kita jelajahi kekayaan rasa ini dan apresiasi warisan kuliner yang telah diwariskan dari generasi ke generasi.'
        ],
        [
            'title' => 'Menjelajahi Alam Indonesia',
            'author' => 'Rina',
            'slug' => 'menjelajahi_alam_indonesia',
            'blog' => 'Indonesia adalah surga bagi para pecinta alam. Dengan gunung berapi yang menjulang, hutan tropis yang lebat, dan lautan yang kaya akan kehidupan bawah air, negeri ini menawarkan petualangan tak terbatas. Dari trekking di Gunung Rinjani hingga menyelam di Raja Ampat, setiap sudut Indonesia menyimpan keajaiban alam yang menakjubkan. Namun, di tengah keindahan ini, kita juga diingatkan akan pentingnya menjaga dan melestarikan alam agar dapat dinikmati oleh generasi mendatang.'
        ]
    ];
    $blog = [];
    foreach ($posts as $post) {
        if ($post['slug'] === $slug) {
            $blog = $post;
        }
    }
    return view(
        'detail_post',
        [
            'post' => $blog
        ]
    );
});