<?php
namespace TwitchEmoteCounter;
// user:read:email
class User {

    const BASE_URL = "https://api.twitch.tv/helix/users?login=";

    public static function get(string $id) {
        $oauth_token = $_ENV['OAUTH_TOKEN'];
        $client_id = $_ENV['CLIENT_ID'];

        $options = [
            "http" => [
                "method" => "GET",
                "header" => "Accept: application/vnd.twitchtv.v5+json\r\nAuthorization: Bearer $oauth_token\r\nClient-Id: $client_id",
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents(self::BASE_URL . $id, false, $context);
        $json = json_decode($result, true);
        $json = $json["data"];

        return $json;
    }

}
