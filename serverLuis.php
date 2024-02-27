<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "bbe3db45f522a48d1cc2", // Replace with 'key' from dashboard
    "644bb4ddeb9cce89b5a7", // Replace with 'secret' from dashboard
    "1760131", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i=0; $i <10; $i++) {
    $pusher->trigger('linea', 'new-linea', array(
         rand(6, 16), rand(6, 16),rand(6, 16),rand(6, 16),rand(6, 16),rand(6, 16),rand(6, 16),rand(6, 16),rand(6, 16),rand(6, 16),rand(6, 16)
    ));
    sleep(1);
}