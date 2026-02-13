<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * A simple method for testing your bot's authentication token. Requires no
 * parameters. Returns basic information about the bot in form of a <a
 * href="https://core.telegram.org/bots/api#user">User</a> object.
 */
final class GetMe implements TelegramBotDto
{
}
