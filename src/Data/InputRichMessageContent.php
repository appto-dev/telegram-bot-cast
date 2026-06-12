<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents the <a href="https://core.telegram.org/bots/api#inputmessagecontent">content</a> of a rich message
 * to be sent as the result of an inline query.
 */
final class InputRichMessageContent implements TelegramBotData, InputMessageContent
{
    public function __construct(
        /** The message to be sent */
        public InputRichMessage $rich_message,
    ) {
    }
}
