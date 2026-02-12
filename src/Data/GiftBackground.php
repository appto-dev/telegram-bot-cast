<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object describes the background of a gift.
 */
final class GiftBackground implements TelegramBotData
{
    public function __construct(
        /** Center color of the background in RGB format */
        public int $center_color,
        /** Edge color of the background in RGB format */
        public int $edge_color,
        /** Text color of the background in RGB format */
        public int $text_color,
    ) {
    }
}
