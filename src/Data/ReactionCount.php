<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents a reaction added to a message along with the number of times it was
 * added.
 */
final class ReactionCount implements TelegramBotData
{
    public function __construct(
        /** Type of the reaction */
        public ReactionType $type,
        /** Number of times the reaction was added */
        public int $total_count,
    ) {
    }
}
