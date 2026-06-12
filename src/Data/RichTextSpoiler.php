<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A text covered by a spoiler.
 */
final class RichTextSpoiler implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "spoiler" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
