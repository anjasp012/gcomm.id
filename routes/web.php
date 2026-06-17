<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'clients' => \App\Models\Client::all()
    ]);
});

Route::get('/about-gcomm', function () {
    return view('about-gcomm');
});

Route::get('/our-experts-behind-the-success', function () {
    return view('our-experts-behind-the-success', [
        'experts' => \App\Models\Expert::all()
    ]);
});

Route::get('/corporate-values', function () {
    return view('corporate-values');
});

Route::get('/trusted-brands', function () {
    return view('trusted-brands', [
        'clients' => \App\Models\Client::all()
    ]);
});

Route::get('/our-company-profile', function () {
    return view('our-company-profile');
});

Route::get('/public-relations', function () {
    return view('services.public-relations');
});

Route::get('/social-media-management', function () {
    return view('services.social-media-management');
});

Route::get('/event-organizer', function () {
    return view('services.event-organizer');
});

Route::get('/crisis-management', function () {
    return view('services.crisis-management');
});

Route::get('/web-development', function () {
    return view('services.web-development');
});

Route::get('/personal-branding', function () {
    return view('services.personal-branding');
});

Route::get('/case-study', function () {
    return view('case-study', [
        'caseStudies' => \App\Models\CaseStudy::latest()->get()
    ]);
});

Route::get('/news', function () {
    return view('news', [
        'newsList' => \App\Models\News::latest()->get()
    ]);
});

Route::get('/news/{slug}', function ($slug) {
    $news = \App\Models\News::where('slug', $slug)->firstOrFail();
    $relatedNews = \App\Models\News::where('id', '!=', $news->id)->latest()->take(3)->get();
    return view('news-detail', compact('news', 'relatedNews'));
});

Route::get('/get-in-touch', function () {
    return view('get-in-touch');
});
