<?php
require_once __DIR__ . "/../vendor/autoload.php";

$path = __DIR__; // Current directory
$twitch = new POGGERS\Twitch($path);

// List of Twitch Global Emotes
$global = new POGGERS\EmoteProviders\GlobalEmotes;
$list = $global->list();

var_dump($list);
