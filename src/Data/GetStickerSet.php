<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Use this method to get a sticker set. On success, a <a
 * href="https://core.telegram.org/bots/api#stickerset">StickerSet</a> object is
 * returned.
 */
final class GetStickerSet implements TelegramBotData
{
    public function __construct(
        /** Name of the sticker set */
        public string $name,
    ) {
    }
}
