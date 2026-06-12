<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 */
final class RichBlockList implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "list" */
        public string $type,
        /**
         * Items of the list
         * @var array<RichBlockListItem>
         */
        public array $items,
    ) {
    }
}
