<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputFile;

/**
 * Use this method to set a new profile photo for the chat. Photos can't be changed
 * for private chats. The bot must be an administrator in the chat for this to work
 * and must have the appropriate administrator rights. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetChatPhoto implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * New chat photo, uploaded using multipart/form-data
         * @var InputFile
         */
        public InputFile $photo,
    ) {
    }
}