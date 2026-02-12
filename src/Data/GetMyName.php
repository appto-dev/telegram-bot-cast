<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Use this method to get the current bot name for the given user language. Returns
 * <a href="https://core.telegram.org/bots/api#botname">BotName</a> on success.
 */
final class GetMyName implements TelegramBotData
{
    public function __construct(
        /** A two-letter ISO 639-1 language code or an empty string */
        public ?string $language_code,
    ) {
    }
}
