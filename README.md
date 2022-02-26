# twitch-emote-counter
Simply get stats of your chat

## Usage
A brief description of API usage , for more examples see click <a href="https://github.com/evokelektrique/twitch-emote-counter/tree/master/examples">here</a>.

### Emotes
```php
require_once __DIR__ . "/vendor/autoload.php";

$path = __DIR__; // Current directory
$twitch = new POGGERS\Twitch($path);

// Get user info
$username = "forsen";
$user = POGGERS\User::get($username);
$user_id = $user[0]["id"];

// List Global Emotes
$global = new POGGERS\EmoteProviders\GlobalEmotes;
$list = $global->list();

// List Channel Emotes
$user_id = "22484632";
$channel = new POGGERS\EmoteProviders\ChannelEmotes;
$list = $channel->list($user_id);

// List BTTV Emotes
$bttv = new POGGERS\EmoteProviders\BTTV;
$list = $bttv->list();

// List FFZ emotes of a channel
$bttv = new POGGERS\EmoteProviders\FFZ;
$list = $bttv->list($user_id);
```
