<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object contains information about an incoming shipping query.
 */
final class ShippingQuery implements TelegramBotData
{
    public function __construct(
        /** Unique query identifier */
        public string $id,
        /** User who sent the query */
        public User $from,
        /** Bot-specified invoice payload */
        public string $invoice_payload,
        /** User specified shipping address */
        public ShippingAddress $shipping_address,
    ) {
    }
}
