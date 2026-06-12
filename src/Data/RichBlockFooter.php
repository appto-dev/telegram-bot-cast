<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A footer, corresponding to the HTML tag <footer>.
 */
final class RichBlockFooter implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "footer" */
        public string $type,
        /** Text of the block */
        public RichText $text,
    ) {
    }
}
