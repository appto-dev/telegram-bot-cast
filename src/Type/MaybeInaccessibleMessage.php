<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object describes a message that can be inaccessible to the bot. It can be
 * one of
 *  - <a href="#message">Message</a>
 *  - <a href="#inaccessiblemessage">InaccessibleMessage</a>
 */
final class MaybeInaccessibleMessage implements TelegramTypeInterface
{
}
