<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\User;

/**
 * Represents a <a href="#chatmember">chat member</a> that was banned in the chat
 * and can't return to the chat or view chat messages.
 */
final class ChatMemberBanned implements TelegramMethodInterface
{
    public function __construct(
        /**
         * The member's status in the chat, always "kicked"
         * @var string
         */
        public string $status,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
        /**
         * Date when restrictions will be lifted for this user; Unix time. If 0, then the
         * user is banned forever
         * @var int
         */
        public int $until_date,
    ) {
    }
}
