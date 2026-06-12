<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 */
final class RichBlockParagraph implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "paragraph" */
        public string $type,
        /** Text of the block */
        public RichText $text,
    ) {
    }
}
