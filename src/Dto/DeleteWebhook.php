<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Use this method to remove webhook integration if you decide to switch back to <a
 * href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>. Returns <em>True</em> on success.
 */
final class DeleteWebhook implements TelegramBotDto
{
    public function __construct(
        /** Pass <em>True</em> to drop all pending updates */
        public ?bool $drop_pending_updates,
    ) {
    }
}
