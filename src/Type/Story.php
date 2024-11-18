<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a story.
 */
final class Story implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Chat that posted the story
         * @var Chat
         */
        public Chat $chat,
        /**
         * Unique identifier for the story in the chat
         * @var int
         */
        public int $id,
    ) {
    }
}
