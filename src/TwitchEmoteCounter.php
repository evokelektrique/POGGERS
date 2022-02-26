<?php
namespace POGGERS;

use POGGERS\Auth;

class Twitch {
	public function __construct(string $path) {
        new Auth($path);
	}
}
