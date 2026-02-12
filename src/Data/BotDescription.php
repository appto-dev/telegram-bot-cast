<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents the bot's description.
 */
final class BotDescription implements TelegramBotData
{
    public function __construct(
        /** The bot's description */
        public string $description,
    ) {
    }
}
