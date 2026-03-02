<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents one shipping option.
 */
final class ShippingOption implements TelegramBotData
{
    public function __construct(
        /** Shipping option identifier */
        public string $id,
        /** Option title */
        public string $title,
        /**
         * List of price portions
         * @var array<LabeledPrice>
         */
        public array $prices,
    ) {
    }
}
