<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes the paid media added to a message.
 *
 * @version Telegram Bot API 7.11
 */
final class PaidMediaInfo implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The number of Telegram Stars that must be paid to buy access to the media
         * @var int
         */
        public int $star_count,
        /**
         * Information about the paid media
         * @var PaidMedia[]
         */
        public array $paid_media,
    ) {
    }
}
