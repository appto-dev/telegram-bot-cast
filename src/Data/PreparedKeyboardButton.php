<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Describes a keyboard button to be used by a user of a Mini App.
 */
final class PreparedKeyboardButton implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the keyboard button */
        public string $id,
    ) {
    }
}
