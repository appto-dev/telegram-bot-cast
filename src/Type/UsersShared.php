<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object contains information about the users whose identifiers were shared
 * with the bot using a <a
 * href="#keyboardbuttonrequestusers">KeyboardButtonRequestUsers</a> button.
 */
final class UsersShared implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier of the request
         * @var int
         */
        public int $request_id,
        /**
         * Information about users shared with the bot.
         * @var SharedUser[]
         */
        public array $users,
    ) {
    }
}
