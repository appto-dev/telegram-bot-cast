<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a venue message to
 * be sent as the result of an inline query.
 */
final class InputVenueMessageContent implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Latitude of the venue in degrees
         * @var float
         */
        public float $latitude,
        /**
         * Longitude of the venue in degrees
         * @var float
         */
        public float $longitude,
        /**
         * Name of the venue
         * @var string
         */
        public string $title,
        /**
         * Address of the venue
         * @var string
         */
        public string $address,
        /**
         * Foursquare identifier of the venue, if known
         * @var string
         */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue, if known. (For example,
         * "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
         * @var string
         */
        public ?string $foursquare_type,
        /**
         * Google Places identifier of the venue
         * @var string
         */
        public ?string $google_place_id,
        /**
         * Google Places type of the venue. (See supported types.)
         * @var string
         */
        public ?string $google_place_type,
    ) {
    }
}
