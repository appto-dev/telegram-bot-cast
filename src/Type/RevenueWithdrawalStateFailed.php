<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The withdrawal failed and the transaction was refunded.
 *
 * @version Telegram Bot API 7.11
 */
final class RevenueWithdrawalStateFailed implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the state, always "failed"
         * @var string
         */
        public string $type,
    ) {
    }
}
