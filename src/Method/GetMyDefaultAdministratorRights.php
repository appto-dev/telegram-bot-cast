<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;

/**
 * Use this method to get the current default administrator rights of the bot.
 * Returns <a href="#chatadministratorrights">ChatAdministratorRights</a> on
 * success.
 */
final class GetMyDefaultAdministratorRights implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Pass <em>True</em> to get default administrator rights of the bot in channels.
         * Otherwise, default administrator rights of the bot for groups and supergroups
         * will be returned.
         * @var bool
         */
        public ?bool $for_channels,
    ) {
    }
}
