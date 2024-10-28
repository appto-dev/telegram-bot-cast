<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a service message about new members invited to a video
 * chat.
 *
 * @version Telegram Bot API 7.10
 */
final class VideoChatParticipantsInvited implements TelegramTypeInterface
{
    public function __construct(
        /**
         * New members that were invited to the video chat
         * @var User[]
         */
        public array $users,
    ) {
    }
}
