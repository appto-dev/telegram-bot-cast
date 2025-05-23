<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to get the list of boosts added to a chat by a user. Requires
 * administrator rights in the chat. Returns a <a
 * href="#userchatboosts">UserChatBoosts</a> object.
 */
final class GetUserChatBoosts implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the chat or username of the channel (in the format
         * <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
    ) {
    }
}
