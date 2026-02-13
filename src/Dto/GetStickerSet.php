<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Use this method to get a sticker set. On success, a <a
 * href="https://core.telegram.org/bots/api#stickerset">StickerSet</a> object is
 * returned.
 */
final class GetStickerSet implements TelegramBotDto
{
    public function __construct(
        /** Name of the sticker set */
        public string $name,
    ) {
    }
}
