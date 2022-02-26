<?php
namespace POGGERS\EmoteProviders;

use POGGERS\EmoteProvider;

/**
 * Main FFZ emotes provider class
 */
class FFZ extends EmoteProvider {

    const ROOM_BASE_URL = "https://api.frankerfacez.com/v1/room/id/";

    protected function get_emote_urls(array $emote): array {
        $images = $emote["urls"];
        $urls = [
            $images["4"] ?? "",
            $images["2"] ?? "",
            $images["1"] ?? "",
        ];

        return $urls;
    }

    protected function get(int $user_id = 0): array {
        $result = file_get_contents(self::ROOM_BASE_URL . $user_id);
        $json = json_decode($result, true);
        $json = $json["sets"][array_key_first($json["sets"])]["emoticons"];

        $emotes = [];

        foreach($json as $emote) {
            $urls = $this->get_emote_urls($emote);
            $emotes[] = [
                "name" => $emote["name"],
                "urls" => $urls,
            ];
        }

        return $emotes;
    }
}
