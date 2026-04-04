<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object contains information about the bot that was created to be managed by the current bot.
 */
final class ManagedBotCreated implements TelegramBotData
{
    public function __construct(
        /** Information about the bot. The bot's token can be fetched using the method getManagedBotToken. */
        public User $bot,
    ) {
    }
}
