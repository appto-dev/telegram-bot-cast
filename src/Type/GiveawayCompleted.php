<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a service message about the completion of a giveaway
 * without public winners.
 */
final class GiveawayCompleted implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Number of winners in the giveaway
         * @var int
         */
        public int $winner_count,
        /**
         * Number of undistributed prizes
         * @var int
         */
        public ?int $unclaimed_prize_count,
        /**
         * Message with the giveaway that was completed, if it wasn't deleted
         * @var Message
         */
        public ?Message $giveaway_message,
        /**
         * True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the
         * giveaway is a Telegram Premium giveaway.
         * @var true
         */
        public ?true $is_star_giveaway,
    ) {
    }
}
