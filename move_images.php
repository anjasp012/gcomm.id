<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

// Create directories if they don't exist
Storage::disk('public')->makeDirectory('experts');
Storage::disk('public')->makeDirectory('clients');

$expertsCount = 0;
// Move Expert Images
$experts = App\Models\Expert::all();
foreach ($experts as $expert) {
    if ($expert->image) {
        // e.g. images/experts/Fathorrahman.png
        $oldPath = public_path($expert->image);
        if (File::exists($oldPath)) {
            $filename = basename($oldPath);
            $newPath = 'experts/' . $filename;
            Storage::disk('public')->put($newPath, file_get_contents($oldPath));
            
            // Update DB
            $expert->update(['image' => $newPath]);
            $expertsCount++;
        }
    }
}

$clientsCount = 0;
// Move Client Images
$clients = App\Models\Client::all();
foreach ($clients as $client) {
    if ($client->logo_image) {
        $oldPath = public_path($client->logo_image);
        if (File::exists($oldPath)) {
            $filename = basename($oldPath);
            $newPath = 'clients/' . $filename;
            Storage::disk('public')->put($newPath, file_get_contents($oldPath));
            
            // Update DB
            $client->update(['logo_image' => $newPath]);
            $clientsCount++;
        }
    }
}

echo "Moved $expertsCount Expert images.\n";
echo "Moved $clientsCount Client images.\n";

