<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The reaction is based on an emoji.
 *
 * @version Telegram Bot API 7.10
 */
final class ReactionTypeEmoji implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the reaction, always "emoji"
         * @var string
         */
        public string $type,
        /**
         * Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", ""
         * @var string
         */
        public string $emoji,
    ) {
    }
}
