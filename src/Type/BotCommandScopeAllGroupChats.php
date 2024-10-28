<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering
 * all group and supergroup chats.
 *
 * @version Telegram Bot API 7.10
 */
final class BotCommandScopeAllGroupChats implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Scope type, must be all_group_chats
         * @var string
         */
        public string $type = 'all_group_chats',
    ) {
    }
}
