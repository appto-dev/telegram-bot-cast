<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputFile;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;

/**
 * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without
 * sound). On success, the sent <a href="#message">Message</a> is returned. Bots
 * can currently send animation files of up to 50 MB in size, this limit may be
 * changed in the future.
 *
 * @version Telegram Bot API 7.10
 */
final class SendAnimation implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int
         */
        public ?int $message_thread_id,
        /**
         * Animation to send. Pass a file_id as String to send an animation that exists on
         * the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to
         * get an animation from the Internet, or upload a new animation using
         * multipart/form-data. <a href="#sending-files">More information on Sending Files
         * </a>
         * @var InputFile|string
         */
        public InputFile|string $animation,
        /**
         * Duration of sent animation in seconds
         * @var int
         */
        public ?int $duration,
        /**
         * Animation width
         * @var int
         */
        public ?int $width,
        /**
         * Animation height
         * @var int
         */
        public ?int $height,
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file
         * is supported server-side. The thumbnail should be in JPEG format and less than
         * 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if
         * the file is not uploaded using multipart/form-data. Thumbnails can't be reused
         * and can be only uploaded as a new file, so you can pass
         * "attach://<file_attach_name>" if the thumbnail was uploaded using
         * multipart/form-data under <file_attach_name>. <a href="#sending-files">More
         * information on Sending Files </a>
         * @var InputFile|string
         */
        public InputFile|string|null $thumbnail,
        /**
         * Animation caption (may also be used when resending animation by
         * <em>file_id</em>), 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the animation caption. See <a
         * href="#formatting-options">formatting options</a> for more details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can
         * be specified instead of <em>parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $caption_entities,
        /**
         * Pass <em>True</em>, if the caption must be shown above the message media
         * @var bool
         */
        public ?bool $show_caption_above_media,
        /**
         * Pass <em>True</em> if the animation needs to be covered with a spoiler animation
         * @var bool
         */
        public ?bool $has_spoiler,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         * @var string
         */
        public ?string $message_effect_id,
        /**
         * Description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>, <a
         * href="/bots/features#keyboards">custom reply keyboard</a>, instructions to
         * remove a reply keyboard or to force a reply from the user
         * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}