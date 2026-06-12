<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Use this method to process a received chat join request query by showing a Mini App to the user before
 * deciding the outcome. Returns <em>True</em> on success.
 */
final class SendChatJoinRequestWebApp implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the join request query */
        public string $chat_join_request_query_id,
        /** The URL of the Mini App to be opened */
        public string $web_app_url,
    ) {
    }
}
