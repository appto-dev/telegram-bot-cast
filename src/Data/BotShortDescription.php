<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents the bot's short description.
 */
final class BotShortDescription implements TelegramBotData
{
    public function __construct(
        /** The bot's short description */
        public string $short_description,
    ) {
    }
}
