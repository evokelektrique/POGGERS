<?php
namespace TwitchEmoteCounter\EmoteProviders;

use TwitchEmoteCounter\EmoteProvider;

/**
 * Main channel emotes provider class
 */
class ChannelEmotes extends EmoteProvider {
    const BASE_URL = "https://api.twitch.tv/helix/chat/emotes?broadcaster_id=";

    protected function get_emote_urls(array $emote): array {
        $images = $emote["images"];
        $urls = [
            $images["url_4x"],
            $images["url_2x"],
            $images["url_1x"],
        ];

        return $urls;
    }

    protected function get(int $user_id = 0): array {
        $oauth_token = $_ENV['OAUTH_TOKEN'];
        $client_id = $_ENV['CLIENT_ID'];

        $options = [
            "http" => [
                "method" => "GET",
                "header" => "Authorization: Bearer $oauth_token\r\n"."Client-Id: $client_id",
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents(self::BASE_URL . $user_id, false, $context);
        $json = json_decode($result, true);
        $json = $json["data"];
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
