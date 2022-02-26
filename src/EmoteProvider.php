<?php
namespace POGGERS;

/**
 * Base class for emote providers
 */
abstract class EmoteProvider {

    abstract protected function get(): array;
    abstract protected function get_emote_urls(array $emote): array;

    public function list(int $user_id = 0): array {
        return $this->get($user_id);
    }
}
