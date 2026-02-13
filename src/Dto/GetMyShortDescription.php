<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Use this method to get the current bot short description for the given user
 * language. Returns <a
 * href="https://core.telegram.org/bots/api#botshortdescription">BotShortDescription</a>
 * on success.
 */
final class GetMyShortDescription implements TelegramBotDto
{
    public function __construct(
        /** A two-letter ISO 639-1 language code or an empty string */
        public ?string $language_code,
    ) {
    }
}
