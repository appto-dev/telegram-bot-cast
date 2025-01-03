<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to create an additional invite link for a chat. The bot must be
 * an administrator in the chat for this to work and must have the appropriate
 * administrator rights. The link can be revoked using the method <a
 * href="#revokechatinvitelink">revokeChatInviteLink</a>. Returns the new invite
 * link as <a href="#chatinvitelink">ChatInviteLink</a> object.
 */
final class CreateChatInviteLink implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Invite link name; 0-32 characters
         * @var string
         */
        public ?string $name,
        /**
         * Point in time (Unix timestamp) when the link will expire
         * @var int
         */
        public ?int $expire_date,
        /**
         * The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         * @var int
         */
        public ?int $member_limit,
        /**
         * <em>True</em>, if users joining the chat via the link need to be approved by
         * chat administrators. If <em>True</em>, <em>member_limit</em> can't be specified
         * @var bool
         */
        public ?bool $creates_join_request,
    ) {
    }
}
