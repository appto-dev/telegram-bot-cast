<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * The reaction is paid.
 */
final class ReactionTypePaid implements TelegramBotData, ReactionType
{
    public function __construct(
        /** Type of the reaction, always "paid" */
        public string $type,
    ) {
    }
}
