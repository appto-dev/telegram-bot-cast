<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represent a list of gifts.
 */
final class Gifts implements TelegramBotData
{
    public function __construct(
        /**
         * The list of gifts
         * @var array<Gift>
         */
        public array $gifts,
    ) {
    }
}
