<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A marked text.
 */
final class RichTextMarked implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "marked" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
