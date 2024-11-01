<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The reaction is paid.
 *
 * @version Telegram Bot API 7.11
 */
final class ReactionTypePaid implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the reaction, always "paid"
         * @var string
         */
        public string $type,
    ) {
    }
}
