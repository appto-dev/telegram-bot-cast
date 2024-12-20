<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputSticker;

/**
 * Use this method to replace an existing sticker in a sticker set with a new one.
 * The method is equivalent to calling <a
 * href="#deletestickerfromset">deleteStickerFromSet</a>, then <a
 * href="#addstickertoset">addStickerToSet</a>, then <a
 * href="#setstickerpositioninset">setStickerPositionInSet</a>. Returns
 * <em>True</em> on success.
 */
final class ReplaceStickerInSet implements TelegramMethodInterface
{
    public function __construct(
        /**
         * User identifier of the sticker set owner
         * @var int
         */
        public int $user_id,
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
        /**
         * File identifier of the replaced sticker
         * @var string
         */
        public string $old_sticker,
        /**
         * A JSON-serialized object with information about the added sticker. If exactly
         * the same sticker had already been added to the set, then the set remains
         * unchanged.
         * @var InputSticker
         */
        public InputSticker $sticker,
    ) {
    }
}
