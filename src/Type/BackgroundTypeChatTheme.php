<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The background is taken directly from a built-in chat theme.
 *
 * @version Telegram Bot API 7.11
 */
final class BackgroundTypeChatTheme implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background, always "chat_theme"
         * @var string
         */
        public string $type,
        /**
         * Name of the chat theme, which is usually an emoji
         * @var string
         */
        public string $theme_name,
    ) {
    }
}
