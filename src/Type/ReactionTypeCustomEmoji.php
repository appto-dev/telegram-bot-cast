<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The reaction is based on a custom emoji.
 */
final class ReactionTypeCustomEmoji implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the reaction, always "custom_emoji"
         * @var string
         */
        public string $type,
        /**
         * Custom emoji identifier
         * @var string
         */
        public string $custom_emoji_id,
    ) {
    }
}
