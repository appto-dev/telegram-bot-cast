<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\BotCommandScope;

/**
 * Use this method to delete the list of the bot's commands for the given scope and
 * user language. After deletion, <a href="#determining-list-of-commands">higher
 * level commands</a> will be shown to affected users. Returns <em>True</em> on
 * success.
 */
final class DeleteMyCommands implements TelegramMethodInterface
{
    public function __construct(
        /**
         * A JSON-serialized object, describing scope of users for which the commands are
         * relevant. Defaults to <a
         * href="#botcommandscopedefault">BotCommandScopeDefault</a>.
         * @var BotCommandScope
         */
        public ?BotCommandScope $scope,
        /**
         * A two-letter ISO 639-1 language code. If empty, commands will be applied to all
         * users from the given scope, for whose language there are no dedicated commands
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
