<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MenuButton;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Describes that no specific value for the menu button was set.
 */
final class MenuButtonDefault implements TelegramBotData, MenuButton
{
    public function __construct(
        /** Type of the button, must be default */
        public string $type,
    ) {
    }
}
