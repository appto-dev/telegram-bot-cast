<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a service message about a user boosting a chat.
 */
final class ChatBoostAdded implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Number of boosts added by the user
         * @var int
         */
        public int $boost_count,
    ) {
    }
}
