<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object describes the backdrop of a unique gift.
 */
final class UniqueGiftBackdrop implements TelegramBotData
{
    public function __construct(
        /** Name of the backdrop */
        public string $name,
        /** Colors of the backdrop */
        public UniqueGiftBackdropColors $colors,
        /** The number of unique gifts that receive this backdrop for every 1000 gifts upgraded */
        public int $rarity_per_mille,
    ) {
    }
}
