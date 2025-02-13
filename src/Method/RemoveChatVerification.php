<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Removes verification from a chat that is currently verified <a
 * href="https://telegram.org/verify#third-party-verification">on behalf of the
 * organization</a> represented by the bot. Returns <em>True</em> on success.
 */
final class RemoveChatVerification implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
