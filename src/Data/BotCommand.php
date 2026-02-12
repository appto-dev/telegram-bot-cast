<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a bot command.
 */
final class BotCommand implements TelegramBotData
{
    public function __construct(
        /**
         * Text of the command; 1-32 characters. Can contain only lowercase English
         * letters, digits and underscores.
         */
        public string $command,
        /** Description of the command; 1-256 characters. */
        public string $description,
    ) {
    }
}
