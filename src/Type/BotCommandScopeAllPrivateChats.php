<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering
 * all private chats.
 *
 * @version Telegram Bot API 7.11
 */
final class BotCommandScopeAllPrivateChats implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Scope type, must be all_private_chats
         * @var string
         */
        public string $type = 'all_private_chats',
    ) {
    }
}
