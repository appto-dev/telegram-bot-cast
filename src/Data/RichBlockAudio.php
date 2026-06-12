<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 */
final class RichBlockAudio implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "audio" */
        public string $type,
        /** The audio */
        public Audio $audio,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
