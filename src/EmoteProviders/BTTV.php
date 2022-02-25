<?php
namespace TwitchEmoteCounter\EmoteProviders;

use TwitchEmoteCounter\EmoteProvider;

/**
 * Main BTTV emotes provider class
 */
class BTTV extends EmoteProvider {
    const BASE_URL = "https://api.betterttv.net/3/cached/emotes/global";

    protected function get_emote_urls(array $emote): array {
        $id = $emote["id"];
        $urls = [
            "https://cdn.betterttv.net/emote/$id/3x",
            "https://cdn.betterttv.net/emote/$id/2x",
            "https://cdn.betterttv.net/emote/$id/1x",
        ];

        return $urls;
    }

    protected function get(int $user_id = 0): array {
        $result = file_get_contents(self::BASE_URL);
        $json = json_decode($result, true);
        $emotes = [];

        foreach($json as $emote) {
            $urls = $this->get_emote_urls($emote);
            $emotes[] = [
                "name" => $emote["code"],
                "urls" => $urls,
            ];
        }

        return $emotes;
    }
}
