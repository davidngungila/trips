<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Foundation\Console\Kernel;
use Illuminate\Support\Facades\DB;

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Kernel::class);

// Create the application
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    $kernel
);

// Bootstrap the application
$kernel->bootstrap();

// Run the image seeder
echo "🖼️  Seeding professional images for TanzaniaTrips...\n\n";

try {
    $seeder = new Database\Seeders\ImageSeeder();
    $seeder->run();
    
    echo "✅ Image seeding completed successfully!\n";
    echo "📊 Images seeded for:\n";
    echo "   • Tours with professional safari photos\n";
    echo "   • Destinations with featured landscape images\n";
    echo "   • Homepage gallery with diverse Tanzania content\n";
    echo "   • Homepage destinations with hero images\n\n";
    echo "🌍 Your TanzaniaTrips website now has beautiful, professional images!\n";
    
} catch (Exception $e) {
    echo "❌ Error seeding images: " . $e->getMessage() . "\n";
    exit(1);
}
