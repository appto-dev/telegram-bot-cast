<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
final class VideoChatEnded implements TelegramBotData
{
    public function __construct(
        /** Video chat duration in seconds */
        public int $duration,
    ) {
    }
}
