<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Describes a service message about an ownership change in the chat.
 */
final class ChatOwnerChanged implements TelegramBotData
{
    public function __construct(
        /** The new owner of the chat */
        public User $new_owner,
    ) {
    }
}
