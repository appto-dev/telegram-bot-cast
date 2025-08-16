<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes a topic of a direct messages chat.
 */
final class DirectMessagesTopic implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the topic
         * @var int
         */
        public int $topic_id,
        /**
         * Information about the user that created the topic. Currently, it is always
         * present
         * @var User
         */
        public ?User $user,
    ) {
    }
}
