<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportData implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Array with information about documents and other Telegram Passport elements that
         * was shared with the bot
         * @var EncryptedPassportElement[]
         */
        public array $data,
        /**
         * Encrypted credentials required to decrypt the data
         * @var EncryptedCredentials
         */
        public EncryptedCredentials $credentials,
    ) {
    }
}
