<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;

/**
 * Use this method to stop a poll which was sent by the bot. On success, the
 * stopped <a href="#poll">Poll</a> is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class StopPoll implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message to
         * be edited was sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Identifier of the original message with the poll
         * @var int
         */
        public int $message_id,
        /**
         * A JSON-serialized object for a new message <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>.
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}