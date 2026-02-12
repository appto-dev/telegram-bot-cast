<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Use this method to edit a checklist on behalf of a connected business account.
 * On success, the edited <a
 * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
 */
final class EditMessageChecklist implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public string $business_connection_id,
        /** Unique identifier for the target chat */
        public int $chat_id,
        /** Unique identifier for the target message */
        public int $message_id,
        /** A JSON-serialized object for the new checklist */
        public InputChecklist $checklist,
        /** A JSON-serialized object for the new inline keyboard for the message */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
