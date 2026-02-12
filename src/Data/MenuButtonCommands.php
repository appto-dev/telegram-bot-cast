<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MenuButton;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
final class MenuButtonCommands implements TelegramBotData, MenuButton
{
    public function __construct(
        /** Type of the button, must be commands */
        public string $type,
    ) {
    }
}
