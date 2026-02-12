<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundType;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a chat background.
 */
final class ChatBackground implements TelegramBotData
{
    public function __construct(
        /** Type of the background */
        public BackgroundType $type,
    ) {
    }
}
