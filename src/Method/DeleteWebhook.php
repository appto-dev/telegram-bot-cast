<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to remove webhook integration if you decide to switch back to <a
 * href="#getupdates">getUpdates</a>. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class DeleteWebhook implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Pass <em>True</em> to drop all pending updates
         * @var bool
         */
        public ?bool $drop_pending_updates,
    ) {
    }
}