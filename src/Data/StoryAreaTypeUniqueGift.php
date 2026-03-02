<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\StoryAreaType;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 */
final class StoryAreaTypeUniqueGift implements TelegramBotData, StoryAreaType
{
    public function __construct(
        /** Type of the area, always "unique_gift" */
        public string $type,
        /** Unique name of the gift */
        public string $name,
    ) {
    }
}
