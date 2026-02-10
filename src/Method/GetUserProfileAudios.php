<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to get a list of profile audios for a user. Returns a <a
 * href="#userprofileaudios">UserProfileAudios</a> object.
 */
final class GetUserProfileAudios implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * Sequential number of the first audio to be returned. By default, all audios are
         * returned.
         * @var int
         */
        public ?int $offset,
        /**
         * Limits the number of audios to be retrieved. Values between 1-100 are accepted.
         * Defaults to 100.
         * @var int
         */
        public ?int $limit,
    ) {
    }
}
