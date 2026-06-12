<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A strikethrough text.
 */
final class RichTextStrikethrough implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "strikethrough" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
