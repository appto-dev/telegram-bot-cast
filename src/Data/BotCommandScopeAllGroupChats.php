<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents the <a href="https://core.telegram.org/bots/api#botcommandscope">scope</a> of bot commands,
 * covering all group and supergroup chats.
 */
final class BotCommandScopeAllGroupChats implements TelegramBotData, BotCommandScope
{
    public function __construct(
        /** Scope type, must be all_group_chats */
        public string $type,
    ) {
    }
}
