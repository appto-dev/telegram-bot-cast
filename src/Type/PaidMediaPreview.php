<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The paid media isn't available before the payment.
 *
 * @version Telegram Bot API 7.10
 */
final class PaidMediaPreview implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the paid media, always "preview"
         * @var string
         */
        public string $type,
        /**
         * Media width as defined by the sender
         * @var int
         */
        public ?int $width,
        /**
         * Media height as defined by the sender
         * @var int
         */
        public ?int $height,
        /**
         * Duration of the media in seconds as defined by the sender
         * @var int
         */
        public ?int $duration,
    ) {
    }
}