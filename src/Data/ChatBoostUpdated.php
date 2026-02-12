<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a boost added to a chat or changed.
 */
final class ChatBoostUpdated implements TelegramBotData
{
    public function __construct(
        /** Chat which was boosted */
        public Chat $chat,
        /** Information about the chat boost */
        public ChatBoost $boost,
    ) {
    }
}
