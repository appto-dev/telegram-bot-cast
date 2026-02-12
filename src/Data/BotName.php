<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents the bot's name.
 */
final class BotName implements TelegramBotData
{
    public function __construct(
        /** The bot's name */
        public string $name,
    ) {
    }
}
