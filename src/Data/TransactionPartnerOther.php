<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;

/**
 * Describes a transaction with an unknown source or recipient.
 */
final class TransactionPartnerOther implements TelegramBotData, TransactionPartner
{
    public function __construct(
        /** Type of the transaction partner, always "other" */
        public string $type,
    ) {
    }
}
