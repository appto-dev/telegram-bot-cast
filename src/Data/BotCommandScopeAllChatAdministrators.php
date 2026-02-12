<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents the <a
 * href="https://core.telegram.org/bots/api#botcommandscope">scope</a> of bot
 * commands, covering all group and supergroup chat administrators.
 */
final class BotCommandScopeAllChatAdministrators implements TelegramBotData, BotCommandScope
{
    public function __construct(
        /** Scope type, must be all_chat_administrators */
        public string $type,
    ) {
    }
}
