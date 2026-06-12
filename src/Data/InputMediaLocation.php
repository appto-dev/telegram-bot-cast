<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputPollMedia;
use Appto\TelegramBot\Interfaces\InputPollOptionMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Represents a location to be sent.
 */
final class InputMediaLocation implements TelegramBotData, InputPollMedia, InputPollOptionMedia
{
    public function __construct(
        /** Type of the result, must be location */
        public string $type,
        /** Latitude of the location */
        public float $latitude,
        /** Longitude of the location */
        public float $longitude,
        /** The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
    ) {
    }
}
