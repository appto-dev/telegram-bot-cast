<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;

/**
 * Changes the bio of a managed business account. Requires the
 * <em>can_change_bio</em> business bot right. Returns <em>True</em> on success.
 */
final class SetBusinessAccountBio implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** The new value of the bio for the business account; 0-140 characters */
        public ?string $bio,
    ) {
    }
}
