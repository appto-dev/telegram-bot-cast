<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Removes verification from a user who is currently verified <a
 * href="https://telegram.org/verify#third-party-verification">on behalf of the
 * organization</a> represented by the bot. Returns <em>True</em> on success.
 */
final class RemoveUserVerification implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
    ) {
    }
}
