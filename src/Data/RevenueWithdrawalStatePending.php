<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RevenueWithdrawalState;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * The withdrawal is in progress.
 */
final class RevenueWithdrawalStatePending implements TelegramBotData, RevenueWithdrawalState
{
    public function __construct(
        /** Type of the state, always "pending" */
        public string $type,
    ) {
    }
}
