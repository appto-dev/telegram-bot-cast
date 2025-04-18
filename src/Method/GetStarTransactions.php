<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Returns the bot's Telegram Star transactions in chronological order. On success,
 * returns a <a href="#startransactions">StarTransactions</a> object.
 */
final class GetStarTransactions implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Number of transactions to skip in the response
         * @var int
         */
        public ?int $offset,
        /**
         * The maximum number of transactions to be retrieved. Values between 1-100 are
         * accepted. Defaults to 100.
         * @var int
         */
        public ?int $limit,
    ) {
    }
}
