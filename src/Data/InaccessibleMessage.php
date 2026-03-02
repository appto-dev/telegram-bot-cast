<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MaybeInaccessibleMessage;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
final class InaccessibleMessage implements TelegramBotData, MaybeInaccessibleMessage
{
    public function __construct(
        /** Chat the message belonged to */
        public Chat $chat,
        /** Unique message identifier inside the chat */
        public int $message_id,
        /** Always 0. The field can be used to differentiate regular and inaccessible messages. */
        public int $date,
    ) {
    }
}
