<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Contains a list of Telegram Star transactions.
 */
final class StarTransactions implements TelegramBotData
{
    public function __construct(
        /**
         * The list of transactions
         * @var array<StarTransaction>
         */
        public array $transactions,
    ) {
    }
}
