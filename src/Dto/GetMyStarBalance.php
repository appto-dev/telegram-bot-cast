<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * A method to get the current Telegram Stars balance of the bot. Requires no parameters. On success, returns a
 * <a href="https://core.telegram.org/bots/api#staramount">StarAmount</a> object.
 */
final class GetMyStarBalance implements TelegramBotDto
{
}
