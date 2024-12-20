<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to unban a previously banned user in a supergroup or channel.
 * The user will not return to the group or channel automatically, but will be able
 * to join via link, etc. The bot must be an administrator for this to work. By
 * default, this method guarantees that after the call the user is not a member of
 * the chat, but will be able to join it. So if the user is a member of the chat
 * they will also be removed from the chat. If you don't want this, use the
 * parameter <em>only_if_banned</em>. Returns <em>True</em> on success.
 */
final class UnbanChatMember implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target group or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * Do nothing if the user is not banned
         * @var bool
         */
        public ?bool $only_if_banned,
    ) {
    }
}
