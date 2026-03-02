<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents the default <a href="https://core.telegram.org/bots/api#botcommandscope">scope</a> of bot commands.
 * Default commands are used if no commands with a <a
 * href="https://core.telegram.org/bots/api#determining-list-of-commands">narrower scope</a> are specified for
 * the user.
 */
final class BotCommandScopeDefault implements TelegramBotData, BotCommandScope
{
    public function __construct(
        /** Scope type, must be default */
        public string $type,
    ) {
    }
}
