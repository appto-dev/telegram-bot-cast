<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 *
 * @version Telegram Bot API 7.10
 */
final class TransactionPartnerTelegramAds implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "telegram_ads"
         * @var string
         */
        public string $type,
    ) {
    }
}