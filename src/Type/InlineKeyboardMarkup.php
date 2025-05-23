<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents an <a href="/bots/features#inline-keyboards">inline
 * keyboard</a> that appears right next to the message it belongs to.
 */
final class InlineKeyboardMarkup implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Array of button rows, each represented by an Array of InlineKeyboardButton
         * objects
         * @var array<InlineKeyboardButton[]>
         */
        public array $inline_keyboard,
    ) {
    }
}
