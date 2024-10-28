<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The withdrawal is in progress.
 *
 * @version Telegram Bot API 7.10
 */
final class RevenueWithdrawalStatePending implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the state, always "pending"
         * @var string
         */
        public string $type,
    ) {
    }
}
