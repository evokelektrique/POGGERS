<?php
namespace TwitchEmoteCounter;

/**
 * Base class for emote providers
 */
abstract class EmoteProvider {
    abstract protected function get(): array;
    abstract protected function get_emote_images(array $emote): array;

    public function list(): array {
        return $this->get();
    }
}
