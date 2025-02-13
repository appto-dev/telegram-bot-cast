<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes a transaction with a chat.
 */
final class TransactionPartnerChat implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "chat"
         * @var string
         */
        public string $type,
        /**
         * Information about the chat
         * @var Chat
         */
        public Chat $chat,
        /**
         * The gift sent to the chat by the bot
         * @var Gift
         */
        public ?Gift $gift,
    ) {
    }
}
