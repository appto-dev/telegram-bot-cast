<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents a chat background.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatBackground implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background
         * @var BackgroundType
         */
        public BackgroundType $type,
    ) {
    }
}