<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The paid media is a photo.
 *
 * @version Telegram Bot API 7.11
 */
final class PaidMediaPhoto implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the paid media, always "photo"
         * @var string
         */
        public string $type,
        /**
         * The photo
         * @var PhotoSize[]
         */
        public array $photo,
    ) {
    }
}
