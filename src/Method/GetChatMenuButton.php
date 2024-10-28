<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to get the current value of the bot's menu button in a private
 * chat, or the default menu button. Returns <a href="#menubutton">MenuButton</a>
 * on success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetChatMenuButton implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target private chat. If not specified, default bot's
         * menu button will be returned
         * @var int
         */
        public ?int $chat_id,
    ) {
    }
}