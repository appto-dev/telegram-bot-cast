<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Contains information about the start page settings of a Telegram Business
 * account.
 */
final class BusinessIntro implements TelegramBotData
{
    public function __construct(
        /** Title text of the business intro */
        public ?string $title,
        /** Message text of the business intro */
        public ?string $message,
        /** Sticker of the business intro */
        public ?Sticker $sticker,
    ) {
    }
}
