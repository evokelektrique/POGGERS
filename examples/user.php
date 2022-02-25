<?php
require_once __DIR__ . "/../vendor/autoload.php";

$path = __DIR__; // Current directory
$twitch = new TwitchEmoteCounter\Twitch($path);

// Get twitch user info
$username = "forsen";
$user = TwitchEmoteCounter\User::get($username);
$user_id = $user[0]["id"];

echo $user_id;
