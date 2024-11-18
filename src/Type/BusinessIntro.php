<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Contains information about the start page settings of a Telegram Business
 * account.
 */
final class BusinessIntro implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Title text of the business intro
         * @var string
         */
        public ?string $title,
        /**
         * Message text of the business intro
         * @var string
         */
        public ?string $message,
        /**
         * Sticker of the business intro
         * @var Sticker
         */
        public ?Sticker $sticker,
    ) {
    }
}
