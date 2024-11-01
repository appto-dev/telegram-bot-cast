<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes that no specific value for the menu button was set.
 *
 * @version Telegram Bot API 7.11
 */
final class MenuButtonDefault implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the button, must be default
         * @var string
         */
        public string $type = 'default',
    ) {
    }
}
