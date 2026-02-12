<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a service message about a user boosting a chat.
 */
final class ChatBoostAdded implements TelegramBotData
{
    public function __construct(
        /** Number of boosts added by the user */
        public int $boost_count,
    ) {
    }
}
