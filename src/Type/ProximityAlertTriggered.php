<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents the content of a service message, sent whenever a user in
 * the chat triggers a proximity alert set by another user.
 *
 * @version Telegram Bot API 7.11
 */
final class ProximityAlertTriggered implements TelegramTypeInterface
{
    public function __construct(
        /**
         * User that triggered the alert
         * @var User
         */
        public User $traveler,
        /**
         * User that set the alert
         * @var User
         */
        public User $watcher,
        /**
         * The distance between the users
         * @var int
         */
        public int $distance,
    ) {
    }
}
