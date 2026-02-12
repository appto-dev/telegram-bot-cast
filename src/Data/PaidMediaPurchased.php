<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object contains information about a paid media purchase.
 */
final class PaidMediaPurchased implements TelegramBotData
{
    public function __construct(
        /** User who purchased the media */
        public User $from,
        /** Bot-specified paid media payload */
        public string $paid_media_payload,
    ) {
    }
}
