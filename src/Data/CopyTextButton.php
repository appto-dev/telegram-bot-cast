<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents an inline keyboard button that copies specified text to
 * the clipboard.
 */
final class CopyTextButton implements TelegramBotData
{
    public function __construct(
        /** The text to be copied to the clipboard; 1-256 characters */
        public string $text,
    ) {
    }
}
