<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a list of boosts added to a chat by a user.
 */
final class UserChatBoosts implements TelegramBotData
{
    public function __construct(
        /** The list of boosts added to the chat by the user */
        public ChatBoost $boosts,
    ) {
    }
}
