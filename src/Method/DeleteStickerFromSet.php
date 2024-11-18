<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to delete a sticker from a set created by the bot. Returns
 * <em>True</em> on success.
 */
final class DeleteStickerFromSet implements TelegramMethodInterface
{
    public function __construct(
        /**
         * File identifier of the sticker
         * @var string
         */
        public string $sticker,
    ) {
    }
}
