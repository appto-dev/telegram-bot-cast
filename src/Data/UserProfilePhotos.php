<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represent a user's profile pictures.
 */
final class UserProfilePhotos implements TelegramBotData
{
    public function __construct(
        /** Total number of profile pictures the target user has */
        public int $total_count,
        /** Requested profile pictures (in up to 4 sizes each) */
        public PhotoSize $photos,
    ) {
    }
}
