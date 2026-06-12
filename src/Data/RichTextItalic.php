<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * An italicized text.
 */
final class RichTextItalic implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "italic" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
