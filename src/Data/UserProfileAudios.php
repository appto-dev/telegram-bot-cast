<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents the audios displayed on a user's profile.
 */
final class UserProfileAudios implements TelegramBotData
{
    public function __construct(
        /** Total number of profile audios for the target user */
        public int $total_count,
        /**
         * Requested profile audios
         * @var array<Audio>
         */
        public array $audios,
    ) {
    }
}
