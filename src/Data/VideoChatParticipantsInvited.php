<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents a service message about new members invited to a video chat.
 */
final class VideoChatParticipantsInvited implements TelegramBotData
{
    public function __construct(
        /**
         * New members that were invited to the video chat
         * @var array<User>
         */
        public array $users,
    ) {
    }
}
