# twitch-emote-counter
Simply get stats of your chat

## Usage
```php
use TwitchEmoteCounter\EmoteProviders\BTTV;

// List BTTV emotes
$bttv = new BTTV;
$list = $bttv->list();
var_dump($list[0]);
// array(5) {
//   ["id"]=>
//   string(24) "54fa8f1401e468494b85b537"
//   ["code"]=>
//   string(4) ":tf:"
//   ["imageType"]=>
//   string(3) "png"
//   ["userId"]=>
//   string(24) "5561169bd6b9d206222a8c19"
//   ["images"]=>
//   array(3) {
//     [0]=>
//     string(59) "https://cdn.betterttv.net/emote/54fa8f1401e468494b85b537/1x"
//     [1]=>
//     string(59) "https://cdn.betterttv.net/emote/54fa8f1401e468494b85b537/2x"
//     [2]=>
//     string(59) "https://cdn.betterttv.net/emote/54fa8f1401e468494b85b537/3x"
//   }
// }
```
