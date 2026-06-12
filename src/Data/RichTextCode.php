<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A monowidth text.
 */
final class RichTextCode implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "code" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
