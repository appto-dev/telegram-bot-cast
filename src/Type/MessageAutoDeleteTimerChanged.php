<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a service message about a change in auto-delete timer
 * settings.
 *
 * @version Telegram Bot API 7.11
 */
final class MessageAutoDeleteTimerChanged implements TelegramTypeInterface
{
    public function __construct(
        /**
         * New auto-delete time for messages in the chat; in seconds
         * @var int
         */
        public int $message_auto_delete_time,
    ) {
    }
}
