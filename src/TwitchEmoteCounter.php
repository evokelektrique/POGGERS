<?php
namespace TwitchEmoteCounter;

use TwitchEmoteCounter\Auth;

class Twitch {
	public function __construct(string $path) {
        new Auth($path);
	}
}
