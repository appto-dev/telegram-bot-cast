<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The withdrawal is in progress.
 *
 * @version Telegram Bot API 7.11
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
