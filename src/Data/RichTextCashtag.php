<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A cashtag.
 */
final class RichTextCashtag implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "cashtag" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The cashtag */
        public string $cashtag,
    ) {
    }
}
