<p align="center"><img src="https://raw.githubusercontent.com/ffb255/botter/master/resources/github/logo.png"></p>

Botter is a PHP library, designed to build powerful [Telegram](https://telegram.org) bots in the fastest and easiest way possible.
```php
require_once "vendor/autoload.php";

use ffb255\Botter\BotterFactory;
use ffb255\Botter\Updates\Events\On;

$botter = BotterFactory::create("YOUR_BOT_TOKEN");

On::text("/start", function() use ($botter) {
    $botter->reply("Hello user!");
});

$botter->listen();
```

## Features
* Conversations
* Custom Request Builder
* Multi Level Cache Storage (Redis, JsonFile and etc..)
* Readable Codes
* Incoming update AutoComplete in IDEs (Full OOP)
![alt text][autocomplete]

## Installation
##### Using [Composer](https://getcomposer.org/):
```
composer require ffb255/botter
```

## Documentation
Check **[Wiki Pages](https://github.com/ffb255/Botter/wiki)** for documentation.<br>
You can find Botter methods with their examples in wiki.<br>
Also check out [@BotterDocsBot](https://t.me/BotterDocsBot), a bot made in Botter and help you to test documentation examples output.

## Why did I make Botter?
The goal was to simplify the process of making Telegram bots for my projects. ~2 years after I built Botter, I decided to publish it as a Open Source library.<br> 
Of course, there are still some problems in Botter that I am constantly trying to fix them. If you find a problem you can tell me in [Issues](https://github.com/ffb255/Botter/issues).

[autocomplete]: https://raw.githubusercontent.com/ffb255/botter/master/resources/github/auto-complete-preview.png "Incoming Update Auto Complete"
[logo]: https://raw.githubusercontent.com/ffb255/botter/master/resources/github/logo.png "Botter Logo"

## License
Botter is a free software distributed under the terms of the MIT license.