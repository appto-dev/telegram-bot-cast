<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A link to a reference.
 */
final class RichTextReferenceLink implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "reference_link" */
        public string $type,
        /** The link text */
        public RichText $text,
        /** The name of the reference */
        public string $reference_name,
    ) {
    }
}
