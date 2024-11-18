<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a forum topic.
 */
final class ForumTopic implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the forum topic
         * @var int
         */
        public int $message_thread_id,
        /**
         * Name of the topic
         * @var string
         */
        public string $name,
        /**
         * Color of the topic icon in RGB format
         * @var int
         */
        public int $icon_color,
        /**
         * Unique identifier of the custom emoji shown as the topic icon
         * @var string
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
