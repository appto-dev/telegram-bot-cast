<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object is received when messages are deleted from a connected business
 * account.
 *
 * @version Telegram Bot API 7.10
 */
final class BusinessMessagesDeleted implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Information about a chat in the business account. The bot may not have access to
         * the chat or the corresponding user.
         * @var Chat
         */
        public Chat $chat,
        /**
         * The list of identifiers of deleted messages in the chat of the business account
         * @var int[]
         */
        public array $message_ids,
    ) {
    }
}
