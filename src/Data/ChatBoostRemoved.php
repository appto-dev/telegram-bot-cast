<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ChatBoostSource;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a boost removed from a chat.
 */
final class ChatBoostRemoved implements TelegramBotData
{
    public function __construct(
        /** Chat which was boosted */
        public Chat $chat,
        /** Unique identifier of the boost */
        public string $boost_id,
        /** Point in time (Unix timestamp) when the boost was removed */
        public int $remove_date,
        /** Source of the removed boost */
        public ChatBoostSource $source,
    ) {
    }
}
