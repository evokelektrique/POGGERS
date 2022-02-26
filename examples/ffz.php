<?php
require_once __DIR__ . "/../vendor/autoload.php";

$user_id = "22484632";

// List FFZ emotes of a channel
$ffz = new TwitchEmoteCounter\EmoteProviders\FFZ;
$list = $ffz->list($user_id);
