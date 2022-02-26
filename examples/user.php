<?php
require_once __DIR__ . "/../vendor/autoload.php";

$path = __DIR__; // Current directory
$twitch = new POGGERS\Twitch($path);

// Get twitch user info
$username = "forsen";
$user = POGGERS\User::get($username);
$user_id = $user[0]["id"];

echo $user_id;
