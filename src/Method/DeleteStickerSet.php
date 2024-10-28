<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to delete a sticker set that was created by the bot. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class DeleteStickerSet implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
    ) {
    }
}