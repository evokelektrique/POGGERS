<?php
require_once __DIR__ . "/../vendor/autoload.php";

// List of BTTV Emotes
$bttv = new TwitchEmoteCounter\EmoteProviders\BTTV;
$list = $bttv->list();

var_dump($list);
