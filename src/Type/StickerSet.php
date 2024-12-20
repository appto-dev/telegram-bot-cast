<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a sticker set.
 */
final class StickerSet implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
        /**
         * Sticker set title
         * @var string
         */
        public string $title,
        /**
         * Type of stickers in the set, currently one of "regular", "mask", "custom_emoji"
         * @var string
         */
        public string $sticker_type,
        /**
         * List of all set stickers
         * @var Sticker[]
         */
        public array $stickers,
        /**
         * Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
         * @var PhotoSize
         */
        public ?PhotoSize $thumbnail,
    ) {
    }
}
