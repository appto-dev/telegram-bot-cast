<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * The background is a gradient fill.
 */
final class BackgroundFillGradient implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background fill, always "gradient"
         * @var string
         */
        public string $type,
        /**
         * Top color of the gradient in the RGB24 format
         * @var int
         */
        public int $top_color,
        /**
         * Bottom color of the gradient in the RGB24 format
         * @var int
         */
        public int $bottom_color,
        /**
         * Clockwise rotation angle of the background fill in degrees; 0-359
         * @var int
         */
        public int $rotation_angle,
    ) {
    }
}
