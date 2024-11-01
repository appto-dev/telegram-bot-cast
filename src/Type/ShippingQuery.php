<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object contains information about an incoming shipping query.
 *
 * @version Telegram Bot API 7.11
 */
final class ShippingQuery implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique query identifier
         * @var string
         */
        public string $id,
        /**
         * User who sent the query
         * @var User
         */
        public User $from,
        /**
         * Bot-specified invoice payload
         * @var string
         */
        public string $invoice_payload,
        /**
         * User specified shipping address
         * @var ShippingAddress
         */
        public ShippingAddress $shipping_address,
    ) {
    }
}
