<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * The paid media is a photo.
 */
final class PaidMediaPhoto implements TelegramBotData, PaidMedia
{
    public function __construct(
        /** Type of the paid media, always "photo" */
        public string $type,
        /** The photo */
        public PhotoSize $photo,
    ) {
    }
}
