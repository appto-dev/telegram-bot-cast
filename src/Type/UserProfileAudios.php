<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents the audios displayed on a user's profile.
 */
final class UserProfileAudios implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Total number of profile audios for the target user
         * @var int
         */
        public int $total_count,
        /**
         * Requested profile audios
         * @var Audio[]
         */
        public array $audios,
    ) {
    }
}
