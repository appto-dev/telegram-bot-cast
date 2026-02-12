<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * The reaction is based on a custom emoji.
 */
final class ReactionTypeCustomEmoji implements TelegramBotData, ReactionType
{
    public function __construct(
        /** Type of the reaction, always "custom_emoji" */
        public string $type,
        /** Custom emoji identifier */
        public string $custom_emoji_id,
    ) {
    }
}
