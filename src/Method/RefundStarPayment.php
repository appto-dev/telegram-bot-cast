<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Refunds a successful payment in <a href="https://t.me/BotNews/90">Telegram
 * Stars</a>. Returns <em>True</em> on success.
 */
final class RefundStarPayment implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Identifier of the user whose payment will be refunded
         * @var int
         */
        public int $user_id,
        /**
         * Telegram payment identifier
         * @var string
         */
        public string $telegram_payment_charge_id,
    ) {
    }
}
