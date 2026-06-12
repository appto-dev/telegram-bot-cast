<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents an HTTP link.
 */
final class Link implements TelegramBotData
{
    public function __construct(
        /** URL of the link */
        public string $url,
    ) {
    }
}
