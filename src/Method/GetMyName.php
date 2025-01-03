<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to get the current bot name for the given user language. Returns
 * <a href="#botname">BotName</a> on success.
 */
final class GetMyName implements TelegramMethodInterface
{
    public function __construct(
        /**
         * A two-letter ISO 639-1 language code or an empty string
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
