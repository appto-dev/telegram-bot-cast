<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to change the list of emoji assigned to a regular or custom
 * emoji sticker. The sticker must belong to a sticker set created by the bot.
 * Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetStickerEmojiList implements TelegramMethodInterface
{
    public function __construct(
        /**
         * File identifier of the sticker
         * @var string
         */
        public string $sticker,
        /**
         * A JSON-serialized list of 1-20 emoji associated with the sticker
         * @var string[]
         */
        public array $emoji_list,
    ) {
    }
}