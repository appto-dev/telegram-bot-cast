<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents the bot's description.
 *
 * @version Telegram Bot API 7.10
 */
final class BotDescription implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The bot's description
         * @var string
         */
        public string $description,
    ) {
    }
}
