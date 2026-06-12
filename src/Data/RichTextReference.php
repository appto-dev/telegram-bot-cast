<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A reference.
 */
final class RichTextReference implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "reference" */
        public string $type,
        /** Text of the reference */
        public RichText $text,
        /** The name of the reference */
        public string $name,
    ) {
    }
}
