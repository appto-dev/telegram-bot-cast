<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes a story area pointing to a unique gift. Currently, a story can have at
 * most 1 unique gift area.
 */
final class StoryAreaTypeUniqueGift implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the area, always "unique_gift"
         * @var string
         */
        public string $type,
        /**
         * Unique name of the gift
         * @var string
         */
        public string $name,
    ) {
    }
}
