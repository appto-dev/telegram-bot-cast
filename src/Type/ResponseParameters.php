<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes why a request was unsuccessful.
 *
 * @version Telegram Bot API 7.10
 */
final class ResponseParameters implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The group has been migrated to a supergroup with the specified identifier. This
         * number may have more than 32 significant bits and some programming languages may
         * have difficulty/silent defects in interpreting it. But it has at most 52
         * significant bits, so a signed 64-bit integer or double-precision float type are
         * safe for storing this identifier.
         * @var int
         */
        public ?int $migrate_to_chat_id,
        /**
         * In case of exceeding flood control, the number of seconds left to wait before
         * the request can be repeated
         * @var int
         */
        public ?int $retry_after,
    ) {
    }
}