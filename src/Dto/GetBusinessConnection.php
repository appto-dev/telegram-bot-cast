<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Use this method to get information about the connection of the bot with a business account. Returns a <a
 * href="https://core.telegram.org/bots/api#businessconnection">BusinessConnection</a> object on success.
 */
final class GetBusinessConnection implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
    ) {
    }
}
