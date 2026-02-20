<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!session()->has('east_splash_shown')) {
        session(['east_splash_shown' => true]);
        return view('pages/splash/index');
    }

    return view('pages/homepage/index');
});

Route::get('/aims-and-mission', function () {
    return view('pages/aims-mission/aims-mission');
})->name('aims-mission');

Route::get('/current-recipients', function () {
    return view('pages/recipients/current');
})->name('current-recipients');

Route::get('/former-recipients', function () {
    return view('pages/recipients/former');
})->name('former-recipients');

Route::get('/former-recipient', function () {
    return view('pages/recipients/recipient-single');
})->name('recipient-single');

Route::get('/current-recipient', function () {
    return view('pages/recipients/recipient-single');
})->name('recipient-single');

Route::get('/application', function () {
    return view('pages/application/application');
})->name('application');

Route::get('/volunteer', function () {
    return view('pages/volunteers/volunteer');
})->name('volunteer');

Route::get('/trustees', function () {
    return view('pages/trustees/trustees');
})->name('trustees');

Route::get('/trustee', function () {
    return view('pages/trustees/trustee-single');
})->name('trustee-single');

Route::get('/faqs', function () {
    return view('pages/faqs/faqs');
})->name('faqs');

Route::get('/contact-us', function () {
    return view('pages/contact/contact');
})->name('contact-us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/trustee/{slug}', function ($slug) {
//     $page = [
//         'alison-rogers' => [
//             'title' => 'Alison Rogers',
//             'img' => 'assets/images/DSC_0169.jpg',
//             'content' => 'Alison is a trained secondary English and Drama teacher. She has taught in four different secondary schools across both Kenya and Tanzania over the last thirty years. Married to a Kenyan and living in Tanzania, Alison has committed most of her life to working in education within East Africa. She has seen first-hand the difference a good school and university education can make to a young person’s life, and their future opportunities. It can be truly ‘life changing’ for both the individual and their family. She is excited that EAST supports a young person, not only through their secondary schooling, but through university too. This means by the time each student has finished, they are ready to work, and support another student through the same programme.'
//         ],
//         'jonathan-pennington-ridge' => [
//             'title' => 'Jonathan Pennington-Ridge',
//             'img' => 'assets/images/DSC_0169.jpg',
//             'content' => 'Jonathan spent twelve years living in Tanzania, working for 7 years as a Primary School teacher and a further 5 years running a Kilimanjaro climbing company. During his time in Tanzania Jonathan became passionate about encouraging talented pupils to push themselves in terms of tertiary education, possibly overseas but hopefully with the long term view of returning to Tanzania in order to reinvest their skills for the betterment of the country. He now lives in Cornwall and is involved in agricultural construction but still has strong ties to East Africa and is very excited about being involved with EAST and its mission to provide opportunities for young people to further their studies.'
//         ],
//         'wendy-pennington-ridge' => [
//             'title' => 'Wendy Pennington-Ridge',
//             'img' => 'assets/images/DSC_0169.jpg',
//             'content' => "Wendy has lived in several different countries throughout Africa for the majority of her life. She has spent all of her working life as an educationalist, specialising in Key Stage 1. She lived in Tanzania for many years and still feels closely connected to it. Wendy is devoted to education and finds tremendous satisfaction witnessing 'that lightbulb moment’ in a child. She has always been fascinated by how quickly a child can pick up a language and then operate competently in a school setting. Wendy is always so keen to hear about how her former students are getting on and is now looking forward to hearing about how EAST students are doing. She feels very privileged to be involved with EAST and is excited to see the successes of the scheme first hand."
//         ],
//         'minesh-patel' => [
//             'title' => 'Minesh Patel',
//             'img' => 'assets/images/DSC_0169.jpg',
//             'content' => 'Minesh is an experienced teacher of Mathematics and Business with 26 years of experience in the UK and in an international school in Tanzania. Minesh is no stranger to East Africa as he was born in Uganda and spent his childhood there. He enjoys travelling, sport and current affairs and is passionate about providing opportunities to educate pupils in developing countries.'
//         ],
//         'patricia-ridley' => [
//             'title' => 'Patricia Ridley',
//             'img' => 'assets/images/DSC_0169.jpg',
//             'content' => 'Trish has been a History teacher for the last 15 years, while she has also taught PSHE, Geography and Religious Studies. Whilst much of this time has been spent teaching at secondary schools in England, Trish has also taught in a government-run girls’ school in Tanzania for six months, and spent three years working at Braeburn International School in Arusha. Having taught in a range of educational settings, Trish has experienced the difference that high quality education can make, not only to a young person, but to their family and community as well. Trish is proud to be one of the trustees of EAST. It provides a unique opportunity for talented individuals to achieve their true potential through scholarships that support secondary students up to university. There is a sustainability element to EAST, as once a student has secured a job, they can give back to EAST to assist other able and aspiring students.'
//         ],
//         'simon-rowe' => [
//             'title' => 'Simon Rowe',
//             'img' => 'assets/images/DSC_0169.jpg',
//             'content' => 'Simon is an experienced Science and Biology teacher currently working at a school in the Lake District. He spent 3 years as a teacher in Arusha and put a lot of time and effort into the Duke of Edinburgh Award. Not only is he passionate about outdoor education, but he also put a lot of time and effort into getting the students to realise the importance of thinking of others through community service. As a result, it comes as no surprise that Simon was willing to become the Chair for EAST.'
//         ]
//     ];

//     abort_unless(isset($page[$slug]), 404);


//     // return view('pages/trustees/trustee-single');

//     return view('pages/trustees/trustee-single', [
//         'page' => $page[$slug]
//     ]);
// })->name('trustee-single');
