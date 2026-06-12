<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A subscript text.
 */
final class RichTextSubscript implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "subscript" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
