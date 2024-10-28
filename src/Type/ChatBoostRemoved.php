<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a boost removed from a chat.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatBoostRemoved implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Chat which was boosted
         * @var Chat
         */
        public Chat $chat,
        /**
         * Unique identifier of the boost
         * @var string
         */
        public string $boost_id,
        /**
         * Point in time (Unix timestamp) when the boost was removed
         * @var int
         */
        public int $remove_date,
        /**
         * Source of the removed boost
         * @var ChatBoostSource
         */
        public ChatBoostSource $source,
    ) {
    }
}