<div align="center"><img src="https://raw.githubusercontent.com/ffb255/botter/master/resources/github/logo.png"></div>

![Packagist](https://img.shields.io/packagist/l/ffb255/botter)
![Packagist Version](https://img.shields.io/packagist/v/ffb255/botter)
![GitHub issues](https://img.shields.io/github/issues/ffb255/botter)

Botter is a PHP library, designed to build powerful [Telegram](https://telegram.org) bots in the fastest and easiest way possible.
```php
require_once "vendor/autoload.php";

use ffb255\Botter\BotterFactory;
use ffb255\Botter\Updates\Events\On;

$config = [
     'token' => "YOUR_BOT_TOKEN"
];
$botter = BotterFactory::create($config);

On::text("/start", function() use ($botter) {
    $botter->reply("Hello user!");
});

$botter->listen();
```

## Features
* **Conversations**: Building chatbots often requires gathering information from users through conversations. Botter provides an intuitive way to handle conversations, enabling you to create interactive and dynamic bot interactions. This feature allows you to create conversational flows and collect user input efficiently.
* **Custom Request Builder**: With Botter's custom request builder, you have full control over the requests sent to the Telegram Bot API. This flexibility allows you to tailor the requests according to your specific bot requirements. You can easily customize and extend your bot's functionality by leveraging the request builder feature.
* **Multi-Level Cache Storage (Redis, JsonFile and etc..)**: Botter supports multi-level cache storage, including popular options like Redis, JsonFile, and more. This feature helps optimize bot performance by caching frequently accessed data and reducing the need for repetitive API and Database calls.
* **Readable Codes**: Botter is designed with readability in mind, making it easy to understand and maintain your bot's codebase. The library follows clear and consistent coding conventions, allowing you and your team to collaborate seamlessly. By using Botter, you can write clean and readable code that enhances code quality and promotes efficient development.
* **Incoming update AutoComplete in IDEs (OO)**: Botter provides comprehensive incoming update autocomplete functionality in popular IDEs. This feature assists developers in leveraging Botter's full object-oriented programming (OOP) capabilities when handling incoming updates. With autocomplete support, you can easily explore available methods and properties, improving development speed and reducing errors.

![alt text][autocomplete]

## Installation
##### Using [Composer](https://getcomposer.org/):
```
composer require ffb255/botter
```

## Documentation
Check **[Wiki Pages](https://github.com/ffb255/Botter/wiki)** for documentation.<br>
You can find Botter's API with their examples in the wiki.<br>

## Conversation
When it comes to chatbots, you probably don't want to react to single keywords, but instead, you might need to gather information from the user, using a conversation. Let's say that you want your chatbot to provide a rich user onboarding experience for your application users. In the onboarding process, we are going to ask the user for their first name and email address - that's a perfect fit for conversations! ([More on Conversation Wiki](https://github.com/ffb255/botter/wiki/Conversations))

```php
$config = [
     'token' => "YOUR_BOT_TOKEN"
];
$botter = BotterFactory::create($config);

class SignupConversation extends Conversation {
     public function start()
     {
          $this->say("Welcome, Whats your name?");
          $this->next("askEmail");
     }

     public function askEmail()
     {
          $this->name = $this->getAnswer()->getText();
          $this->say("Whats your email?");
          $this->next("finishSignup");
     }

     public function finishSignup()
     {
          $name = $this->name;
          $this->say("Thanks {$name}! Your account has been created.");
          $this->finish();
     }
}

On::text("/signup", function() use($botter){
     $botter->startConversation(new SignupConversation);
});

$botter->listen();
```

## Why did I make Botter?
Botter was created to simplify the process of building Telegram bots for my personal projects. After two years, it was released as an open-source library. While Botter aims to provide a smooth experience, there might still be some issues that are actively being addressed. If you encounter any problems, please feel free to report them in the [Issues](https://github.com/ffb255/Botter/issues) section.

[autocomplete]: https://raw.githubusercontent.com/ffb255/botter/master/resources/github/auto-complete-preview.png "Incoming Update Auto Complete"
[logo]: https://raw.githubusercontent.com/ffb255/botter/master/resources/github/logo.png "Botter Logo"

## License
Botter is free software distributed under the terms of the MIT license.