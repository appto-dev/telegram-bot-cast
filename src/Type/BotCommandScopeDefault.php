<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents the default <a href="#botcommandscope">scope</a> of bot commands.
 * Default commands are used if no commands with a <a
 * href="#determining-list-of-commands">narrower scope</a> are specified for the
 * user.
 */
final class BotCommandScopeDefault implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Scope type, must be default
         * @var string
         */
        public string $type = 'default',
    ) {
    }
}
