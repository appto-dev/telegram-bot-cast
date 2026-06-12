<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A hashtag.
 */
final class RichTextHashtag implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "hashtag" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The hashtag */
        public string $hashtag,
    ) {
    }
}
