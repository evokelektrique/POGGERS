<?php
require_once __DIR__ . "/../vendor/autoload.php";

$path = __DIR__; // Current directory
$twitch = new POGGERS\Twitch($path);

// List of Twitch Channel Emotes
$user_id = "22484632";
$channel = new POGGERS\EmoteProviders\ChannelEmotes;
$list = $channel->list($user_id);

var_dump($list);
