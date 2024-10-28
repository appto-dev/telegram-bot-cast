<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Contains a list of Telegram Star transactions.
 *
 * @version Telegram Bot API 7.10
 */
final class StarTransactions implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The list of transactions
         * @var StarTransaction[]
         */
        public array $transactions,
    ) {
    }
}
