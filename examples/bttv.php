<?php
require_once __DIR__ . "/../vendor/autoload.php";

$user_id = "22484632";

// List BTTV emotes of a channel
$bttv = new TwitchEmoteCounter\EmoteProviders\BTTV;
$list = $bttv->list($user_id);

// List global BTTV Emotes
$bttv = new TwitchEmoteCounter\EmoteProviders\BTTV;
$list = $bttv->list();
