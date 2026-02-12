<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Returns the list of gifts that can be sent by the bot to users and channel
 * chats. Requires no parameters. Returns a <a
 * href="https://core.telegram.org/bots/api#gifts">Gifts</a> object.
 */
final class GetAvailableGifts implements TelegramBotData
{
}
