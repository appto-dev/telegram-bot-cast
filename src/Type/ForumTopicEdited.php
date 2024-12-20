<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a service message about an edited forum topic.
 */
final class ForumTopicEdited implements TelegramTypeInterface
{
    public function __construct(
        /**
         * New name of the topic, if it was edited
         * @var string
         */
        public ?string $name,
        /**
         * New identifier of the custom emoji shown as the topic icon, if it was edited; an
         * empty string if the icon was removed
         * @var string
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
