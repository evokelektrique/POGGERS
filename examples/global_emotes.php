<?php
require_once __DIR__ . "/../vendor/autoload.php";

$path = __DIR__; // Current directory
$twitch = new TwitchEmoteCounter\Twitch($path);

// List of Twitch Global Emotes
$global = new TwitchEmoteCounter\EmoteProviders\GlobalEmotes;
$list = $global->list();

var_dump($list);
