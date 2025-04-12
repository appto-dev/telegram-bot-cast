<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Converts a given regular gift to Telegram Stars. Requires the
 * <em>can_convert_gifts_to_stars</em> business bot right. Returns <em>True</em> on
 * success.
 */
final class ConvertGiftToStars implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Unique identifier of the regular gift that should be converted to Telegram Stars
         * @var string
         */
        public string $owned_gift_id,
    ) {
    }
}
