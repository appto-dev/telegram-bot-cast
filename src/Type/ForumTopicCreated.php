<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a service message about a new forum topic created in the
 * chat.
 *
 * @version Telegram Bot API 7.11
 */
final class ForumTopicCreated implements TelegramTypeInterface
{
    public function __construct(
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
