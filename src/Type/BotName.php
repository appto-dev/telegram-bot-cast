<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents the bot's name.
 */
final class BotName implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The bot's name
         * @var string
         */
        public string $name,
    ) {
    }
}
