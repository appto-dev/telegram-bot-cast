<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents a location to which a chat is connected.
 */
final class ChatLocation implements TelegramBotData
{
    public function __construct(
        /** The location to which the supergroup is connected. Can't be a live location. */
        public Location $location,
        /** Location address; 1-64 characters, as defined by the chat owner */
        public string $address,
    ) {
    }
}
