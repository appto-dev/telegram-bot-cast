<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A text with a bank card number.
 */
final class RichTextBankCardNumber implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "bank_card_number" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The bank card number */
        public string $bank_card_number,
    ) {
    }
}
