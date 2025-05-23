<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to change the bot's short description, which is shown on the
 * bot's profile page and is sent together with the link when users share the bot.
 * Returns <em>True</em> on success.
 */
final class SetMyShortDescription implements TelegramMethodInterface
{
    public function __construct(
        /**
         * New short description for the bot; 0-120 characters. Pass an empty string to
         * remove the dedicated short description for the given language.
         * @var string
         */
        public ?string $short_description,
        /**
         * A two-letter ISO 639-1 language code. If empty, the short description will be
         * applied to all users for whose language there is no dedicated short description.
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
