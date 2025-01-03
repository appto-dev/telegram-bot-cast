<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes a withdrawal transaction with Fragment.
 */
final class TransactionPartnerFragment implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "fragment"
         * @var string
         */
        public string $type,
        /**
         * State of the transaction if the transaction is outgoing
         * @var RevenueWithdrawalState
         */
        public ?RevenueWithdrawalState $withdrawal_state,
    ) {
    }
}
