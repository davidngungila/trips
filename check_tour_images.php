<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

use App\Models\Tour;

echo "🔍 Checking tour images...\n\n";

// Check a few specific tours
$tourNames = ['Tarangire', 'Ngorongoro', 'Lake Manyara', 'Materuni'];

foreach ($tourNames as $tourName) {
    $tour = Tour::where('name', 'like', "%{$tourName}%")->first();
    if ($tour) {
        echo "Tour: " . $tour->name . "\n";
        echo "Slug: " . $tour->slug . "\n";
        echo "Image URL: " . ($tour->image_url ?: 'NULL') . "\n";
        echo "----------------------------------------\n";
    } else {
        echo "No tour found with name containing: {$tourName}\n";
        echo "----------------------------------------\n";
    }
}

// Check total tours with and without images
$totalTours = Tour::count();
$toursWithImages = Tour::whereNotNull('image_url')->where('image_url', '!=', '')->count();
$toursWithoutImages = $totalTours - $toursWithImages;

echo "\n📊 Summary:\n";
echo "Total Tours: {$totalTours}\n";
echo "Tours with Images: {$toursWithImages}\n";
echo "Tours without Images: {$toursWithoutImages}\n";

if ($toursWithoutImages > 0) {
    echo "\n⚠️  Some tours are missing images. Running ImageSeeder...\n";
    
    try {
        $seeder = new Database\Seeders\ImageSeeder();
        $seeder->run();
        echo "✅ ImageSeeder completed successfully!\n";
    } catch (Exception $e) {
        echo "❌ Error running ImageSeeder: " . $e->getMessage() . "\n";
    }
} else {
    echo "\n✅ All tours have images!\n";
}
