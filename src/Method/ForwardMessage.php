<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to forward messages of any kind. Service messages and messages
 * with protected content can't be forwarded. On success, the sent <a
 * href="#message">Message</a> is returned.
 */
final class ForwardMessage implements TelegramMethodInterface
{
    public function __construct(
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
         * Unique identifier for the chat where the original message was sent (or channel
         * username in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $from_chat_id,
        /**
         * New start timestamp for the forwarded video in the message
         * @var int
         */
        public ?int $video_start_timestamp,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the forwarded message from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Message identifier in the chat specified in <em>from_chat_id</em>
         * @var int
         */
        public int $message_id,
    ) {
    }
}
