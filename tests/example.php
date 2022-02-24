<?php
require_once __DIR__ . "/../vendor/autoload.php";

use TwitchEmoteCounter\EmoteProviders\BTTV;

// List of BTTV Emotes
$bttv = new BTTV;
$list = $bttv->list();
