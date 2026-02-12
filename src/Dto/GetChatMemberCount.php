<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Use this method to get the number of members in a chat. Returns <em>Int</em> on
 * success.
 */
final class GetChatMemberCount implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         */
        public int|string $chat_id,
    ) {
    }
}
