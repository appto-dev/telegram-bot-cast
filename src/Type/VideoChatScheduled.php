<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a service message about a video chat scheduled in the
 * chat.
 */
final class VideoChatScheduled implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Point in time (Unix timestamp) when the video chat is supposed to be started by
         * a chat administrator
         * @var int
         */
        public int $start_date,
    ) {
    }
}
