<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents the bot's short description.
 *
 * @version Telegram Bot API 7.10
 */
final class BotShortDescription implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The bot's short description
         * @var string
         */
        public string $short_description,
    ) {
    }
}
