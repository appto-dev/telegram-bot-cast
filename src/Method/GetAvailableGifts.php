<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Returns the list of gifts that can be sent by the bot to users and channel
 * chats. Requires no parameters. Returns a <a href="#gifts">Gifts</a> object.
 */
final class GetAvailableGifts implements TelegramMethodInterface
{
}
