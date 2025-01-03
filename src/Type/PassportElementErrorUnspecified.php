<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents an issue in an unspecified place. The error is considered resolved
 * when new data is added.
 */
final class PassportElementErrorUnspecified implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of element of the user's Telegram Passport which has the issue
         * @var string
         */
        public string $type,
        /**
         * Base64-encoded element hash
         * @var string
         */
        public string $element_hash,
        /**
         * Error message
         * @var string
         */
        public string $message,
        /**
         * Error source, must be unspecified
         * @var string
         */
        public string $source = 'unspecified',
    ) {
    }
}
