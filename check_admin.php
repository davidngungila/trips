<?php
require __DIR__.'/vendor/autoload.php';

use App\Models\User;

$user = User::where('email', 'admin@tanzaniatrips.com')->first();

if ($user) {
    echo "Admin user exists with ID: " . $user->id;
} else {
    echo "Admin user not found";
}
