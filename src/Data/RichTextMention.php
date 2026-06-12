<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A mention by a username.
 */
final class RichTextMention implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "mention" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The username */
        public string $username,
    ) {
    }
}
