<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a unique message identifier.
 *
 * @version Telegram Bot API 7.10
 */
final class MessageId implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique message identifier
         * @var int
         */
        public int $message_id,
    ) {
    }
}
