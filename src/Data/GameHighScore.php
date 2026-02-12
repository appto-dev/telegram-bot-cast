<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * This object represents one row of the high scores table for a game.
 */
final class GameHighScore implements TelegramBotData
{
    public function __construct(
        /** Position in high score table for the game */
        public int $position,
        /** User */
        public User $user,
        /** Score */
        public int $score,
    ) {
    }
}
