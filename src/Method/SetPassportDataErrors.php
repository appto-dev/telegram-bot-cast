<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\PassportElementError;

/**
 * Informs a user that some of the Telegram Passport elements they provided
 * contains errors. The user will not be able to re-submit their Passport to you
 * until the errors are fixed (the contents of the field for which you returned the
 * error must change). Returns <em>True</em> on success.
 * Use this if the data submitted by the user doesn't satisfy the standards your
 * service requires for any reason. For example, if a birthday date seems invalid,
 * a submitted document is blurry, a scan shows evidence of tampering, etc. Supply
 * some details in the error message to make sure the user knows how to correct the
 * issues.
 */
final class SetPassportDataErrors implements TelegramMethodInterface
{
    public function __construct(
        /**
         * User identifier
         * @var int
         */
        public int $user_id,
        /**
         * A JSON-serialized array describing the errors
         * @var PassportElementError[]
         */
        public array $errors,
    ) {
    }
}
