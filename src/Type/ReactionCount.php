<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents a reaction added to a message along with the number of times it was
 * added.
 */
final class ReactionCount implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the reaction
         * @var ReactionType
         */
        public ReactionType $type,
        /**
         * Number of times the reaction was added
         * @var int
         */
        public int $total_count,
    ) {
    }
}
