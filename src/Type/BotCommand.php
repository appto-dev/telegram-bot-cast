<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a bot command.
 *
 * @version Telegram Bot API 7.11
 */
final class BotCommand implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Text of the command; 1-32 characters. Can contain only lowercase English
         * letters, digits and underscores.
         * @var string
         */
        public string $command,
        /**
         * Description of the command; 1-256 characters.
         * @var string
         */
        public string $description,
    ) {
    }
}
