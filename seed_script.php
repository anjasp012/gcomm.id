<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$html = file_get_contents(resource_path('views/trusted-brands.blade.php'));

preg_match_all('/<div class=\"glass p-3.*?<img src=\"\{\{ asset\(\'(.*?)\'\) \}\}\".*?<span.*?>(.*?)<\/span>/s', $html, $matches);

$count = 0;
foreach($matches[1] as $index => $image) {
    $name = trim(strip_tags($matches[2][$index]));
    App\Models\Client::updateOrCreate(['name' => $name], ['logo_image' => $image]);
    $count++;
}

// And there's one without an image: PT Chitose Internasional Tbk
if (preg_match('/<div class=\"font-display.*?>(.*?)<\/div>.*?<span.*?>(.*?)<\/span>/s', $html, $chitose_matches)) {
    // Actually the chitose one doesn't have an image, but logo_image is required in the DB.
    // I can put a placeholder or maybe it's not needed if we make logo_image nullable.
}

echo "Clients seeded: $count\n";

// Let's seed News
$news = [
    [
        'title' => 'Personal Branding Strategies for Public Officials',
        'slug' => 'personal-branding-strategies-for-public-officials',
        'content' => 'Building trust and leadership authority in the eyes of citizens by constructing authentic digital narratives and consistent messaging.',
        'published_at' => '2026-05-03 00:00:00',
        'status' => 'published',
    ],
    [
        'title' => 'Measuring PR Campaign Success with Digital Metrics',
        'slug' => 'measuring-pr-campaign-success-with-digital-metrics',
        'content' => 'Transitioning from basic media clipping tallies to monitoring actual public reach, message sentiment, and conversation conversion.',
        'published_at' => '2026-05-02 00:00:00',
        'status' => 'published',
    ],
    [
        'title' => 'The Power of Real-time Media Sentiment Analytics',
        'slug' => 'the-power-of-real-time-media-sentiment-analytics',
        'content' => 'How tracking real-time media reports and citizen discussions helps prevent communication failures and containment leaks.',
        'published_at' => '2026-04-28 00:00:00',
        'status' => 'published',
    ],
    [
        'title' => 'THE ROLE OF CRISIS COMMUNICATIONS IN THE SOCIAL MEDIA AGE',
        'slug' => 'the-role-of-crisis-communications-in-the-social-media-age',
        'content' => 'Indonesia\'s rapid digital growth demands instantaneous public containment. We explore how to respond to critical media issues quickly and accurately on digital platforms without setting off public escalations.',
        'published_at' => '2026-06-04 00:00:00',
        'status' => 'published',
    ]
];

foreach ($news as $item) {
    App\Models\News::updateOrCreate(['slug' => $item['slug']], $item);
}
echo "News seeded: " . count($news) . "\n";

