<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represent a list of gifts.
 */
final class Gifts implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The list of gifts
         * @var Gift[]
         */
        public array $gifts,
    ) {
    }
}
