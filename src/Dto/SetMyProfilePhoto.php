<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\InputProfilePhoto;
use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Changes the profile photo of the bot. Returns <em>True</em> on success.
 */
final class SetMyProfilePhoto implements TelegramBotDto
{
    public function __construct(
        /** The new profile photo to set */
        public InputProfilePhoto $photo,
    ) {
    }
}
