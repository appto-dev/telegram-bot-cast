<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 */
final class UniqueGiftSymbol implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Name of the symbol
         * @var string
         */
        public string $name,
        /**
         * The sticker that represents the unique gift
         * @var Sticker
         */
        public Sticker $sticker,
        /**
         * The number of unique gifts that receive this model for every 1000 gifts upgraded
         * @var int
         */
        public int $rarity_per_mille,
    ) {
    }
}
