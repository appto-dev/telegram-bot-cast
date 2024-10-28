<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Contains information about the location of a Telegram Business account.
 *
 * @version Telegram Bot API 7.10
 */
final class BusinessLocation implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Address of the business
         * @var string
         */
        public string $address,
        /**
         * Location of the business
         * @var Location
         */
        public ?Location $location,
    ) {
    }
}