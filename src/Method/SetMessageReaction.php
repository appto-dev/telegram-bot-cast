<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\ReactionType;

/**
 * Use this method to change the chosen reactions on a message. Service messages of
 * some types can't be reacted to. Automatically forwarded messages from a channel
 * to its discussion group have the same available reactions as messages in the
 * channel. Bots can't use paid reactions. Returns <em>True</em> on success.
 */
final class SetMessageReaction implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Identifier of the target message. If the message belongs to a media group, the
         * reaction is set to the first non-deleted message in the group instead.
         * @var int
         */
        public int $message_id,
        /**
         * A JSON-serialized list of reaction types to set on the message. Currently, as
         * non-premium users, bots can set up to one reaction per message. A custom emoji
         * reaction can be used if it is either already present on the message or
         * explicitly allowed by chat administrators. Paid reactions can't be used by bots.
         * @var ReactionType[]
         */
        public ?array $reaction,
        /**
         * Pass <em>True</em> to set the reaction with a big animation
         * @var bool
         */
        public ?bool $is_big,
    ) {
    }
}
