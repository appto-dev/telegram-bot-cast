<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents a <a href="#chatmember">chat member</a> that owns the chat and has
 * all administrator privileges.
 */
final class ChatMemberOwner implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The member's status in the chat, always "creator"
         * @var string
         */
        public string $status,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
        /**
         * True, if the user's presence in the chat is hidden
         * @var bool
         */
        public bool $is_anonymous,
        /**
         * Custom title for this user
         * @var string
         */
        public ?string $custom_title,
    ) {
    }
}
