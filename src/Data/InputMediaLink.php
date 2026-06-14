<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputPollOptionMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents an HTTP link to be sent.
 */
final class InputMediaLink implements TelegramBotData, InputPollOptionMedia
{
    public function __construct(
        /** Type of the media, must be link */
        public string $type,
        /** HTTP URL of the link */
        public string $url,
    ) {
    }
}
