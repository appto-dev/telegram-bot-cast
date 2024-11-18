<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes a transaction with an unknown source or recipient.
 */
final class TransactionPartnerOther implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "other"
         * @var string
         */
        public string $type,
    ) {
    }
}
