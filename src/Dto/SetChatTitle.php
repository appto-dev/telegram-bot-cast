<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Use this method to change the title of a chat. Titles can't be changed for
 * private chats. The bot must be an administrator in the chat for this to work and
 * must have the appropriate administrator rights. Returns <em>True</em> on
 * success.
 */
final class SetChatTitle implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** New chat title, 1-128 characters */
        public string $title,
    ) {
    }
}
