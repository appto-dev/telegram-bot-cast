<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents a <a href="#chatmember">chat member</a> that has no additional
 * privileges or restrictions.
 */
final class ChatMemberMember implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The member's status in the chat, always "member"
         * @var string
         */
        public string $status,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
        /**
         * Date when the user's subscription will expire; Unix time
         * @var int
         */
        public ?int $until_date,
    ) {
    }
}
