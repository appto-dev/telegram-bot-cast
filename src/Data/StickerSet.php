<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a sticker set.
 */
final class StickerSet implements TelegramBotData
{
    public function __construct(
        /** Sticker set name */
        public string $name,
        /** Sticker set title */
        public string $title,
        /** Type of stickers in the set, currently one of "regular", "mask", "custom_emoji" */
        public string $sticker_type,
        /** List of all set stickers */
        public Sticker $stickers,
        /** Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
        public ?PhotoSize $thumbnail,
    ) {
    }
}
