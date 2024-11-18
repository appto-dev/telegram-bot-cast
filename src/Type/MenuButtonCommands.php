<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
final class MenuButtonCommands implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the button, must be commands
         * @var string
         */
        public string $type = 'commands',
    ) {
    }
}
