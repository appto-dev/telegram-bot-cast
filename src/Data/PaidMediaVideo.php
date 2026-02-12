<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * The paid media is a video.
 */
final class PaidMediaVideo implements TelegramBotData, PaidMedia
{
    public function __construct(
        /** Type of the paid media, always "video" */
        public string $type,
        /** The video */
        public Video $video,
    ) {
    }
}
