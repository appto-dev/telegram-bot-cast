<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this
 * sticker will be sent by the user. Alternatively, you can use
 * <em>input_message_content</em> to send a message with the specified content
 * instead of the sticker.
 */
final class InlineQueryResultCachedSticker implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid file identifier of the sticker
         * @var string
         */
        public string $sticker_file_id,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the sticker
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Type of the result, must be sticker
         * @var string
         */
        public string $type = 'sticker',
    ) {
    }
}
