<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a list of boosts added to a chat by a user.
 */
final class UserChatBoosts implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The list of boosts added to the chat by the user
         * @var ChatBoost[]
         */
        public array $boosts,
    ) {
    }
}
