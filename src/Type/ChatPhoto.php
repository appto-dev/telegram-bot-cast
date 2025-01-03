<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a chat photo.
 */
final class ChatPhoto implements TelegramTypeInterface
{
    public function __construct(
        /**
         * File identifier of small (160x160) chat photo. This file_id can be used only for
         * photo download and only for as long as the photo is not changed.
         * @var string
         */
        public string $small_file_id,
        /**
         * Unique file identifier of small (160x160) chat photo, which is supposed to be
         * the same over time and for different bots. Can't be used to download or reuse
         * the file.
         * @var string
         */
        public string $small_file_unique_id,
        /**
         * File identifier of big (640x640) chat photo. This file_id can be used only for
         * photo download and only for as long as the photo is not changed.
         * @var string
         */
        public string $big_file_id,
        /**
         * Unique file identifier of big (640x640) chat photo, which is supposed to be the
         * same over time and for different bots. Can't be used to download or reuse the
         * file.
         * @var string
         */
        public string $big_file_unique_id,
    ) {
    }
}
