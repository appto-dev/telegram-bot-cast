<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The background is automatically filled based on the selected colors.
 */
final class BackgroundTypeFill implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background, always "fill"
         * @var string
         */
        public string $type,
        /**
         * The background fill
         * @var BackgroundFill
         */
        public BackgroundFill $fill,
        /**
         * Dimming of the background in dark themes, as a percentage; 0-100
         * @var int
         */
        public int $dark_theme_dimming,
    ) {
    }
}
