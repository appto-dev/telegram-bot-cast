<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to set a custom title for an administrator in a supergroup
 * promoted by the bot. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetChatAdministratorCustomTitle implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format <code>@supergroupusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * New custom title for the administrator; 0-16 characters, emoji are not allowed
         * @var string
         */
        public string $custom_title,
    ) {
    }
}