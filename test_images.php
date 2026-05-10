<?php

// Simple test to check if images are in database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'TanzaniaTrips';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "🔍 Checking tour images in database...\n\n";
    
    // Check all tours and their slugs
    $stmt = $pdo->query("SELECT name, slug, image_url FROM tours ORDER BY name");
    
    $tours = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($tours as $tour) {
        echo "Tour: " . $tour['name'] . "\n";
        echo "Slug: " . $tour['slug'] . "\n";
        echo "Image URL: " . ($tour['image_url'] ?: 'NULL') . "\n";
        echo "----------------------------------------\n";
    }
    
    // Check count
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM tours WHERE image_url IS NOT NULL AND image_url != ''");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "\n📊 Tours with images: " . $result['total'] . "\n";
    
    // Check total tours
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM tours");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "📊 Total tours: " . $result['total'] . "\n";
    
} catch (PDOException $e) {
    echo "❌ Database error: " . $e->getMessage() . "\n";
}
