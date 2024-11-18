<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents one shipping option.
 */
final class ShippingOption implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Shipping option identifier
         * @var string
         */
        public string $id,
        /**
         * Option title
         * @var string
         */
        public string $title,
        /**
         * List of price portions
         * @var LabeledPrice[]
         */
        public array $prices,
    ) {
    }
}
