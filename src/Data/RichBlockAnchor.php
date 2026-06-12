<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A block with an anchor, corresponding to the HTML tag <a> with the attribute name.
 */
final class RichBlockAnchor implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "anchor" */
        public string $type,
        /** The name of the anchor */
        public string $name,
    ) {
    }
}
