<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents the bot's name.
 *
 * @version Telegram Bot API 7.10
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
