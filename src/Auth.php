<?php
namespace TwitchEmoteCounter;

/**
 * Authentication class
 */
class Auth {
    public function __construct(string $path) {
        $this->load_env($path);
    }

    protected function load_env(string $path) {
        $dotenv = \Dotenv\Dotenv::createImmutable($path);
        $dotenv->load();
        $dotenv->required(['CLIENT_ID', 'OAUTH_TOKEN', 'DSN'])->notEmpty();
    }
}
