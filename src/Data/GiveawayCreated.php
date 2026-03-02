<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a service message about the creation of a scheduled giveaway.
 */
final class GiveawayCreated implements TelegramBotData
{
    public function __construct(
        /** The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only */
        public ?int $prize_star_count,
    ) {
    }
}
