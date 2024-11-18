<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents the bot's description.
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
