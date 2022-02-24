<?php
namespace TwitchEmoteCounter\EmoteProviders;

use TwitchEmoteCounter\EmoteProvider;

/**
 * Main BTTV emote provider class
 */
class BTTV extends EmoteProvider {
    const GLOBAL_URL = "https://api.betterttv.net/3/cached/emotes/global";

    protected function get_emote_images(array $emote): array {
        $id = $emote["id"];
        $images = [
            "https://cdn.betterttv.net/emote/$id/1x",
            "https://cdn.betterttv.net/emote/$id/2x",
            "https://cdn.betterttv.net/emote/$id/3x",
        ];

        return ["images" => $images];
    }

    protected function get(): array {
        $result = file_get_contents(self::GLOBAL_URL);
        $json = json_decode($result, true);
        $emotes = [];

        foreach($json as $emote) {
            $emotes[] = array_merge($emote, $this->get_emote_images($emote));
        }

        return $emotes;
    }
}
