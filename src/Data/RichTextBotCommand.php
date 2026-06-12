<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A bot command.
 */
final class RichTextBotCommand implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "bot_command" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The bot command */
        public string $bot_command,
    ) {
    }
}
