<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * An underlined text.
 */
final class RichTextUnderline implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "underline" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
