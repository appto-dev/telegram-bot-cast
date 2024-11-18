<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The paid media is a video.
 */
final class PaidMediaVideo implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the paid media, always "video"
         * @var string
         */
        public string $type,
        /**
         * The video
         * @var Video
         */
        public Video $video,
    ) {
    }
}
