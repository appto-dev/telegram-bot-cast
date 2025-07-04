<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes a service message about checklist tasks marked as done or not done.
 */
final class ChecklistTasksDone implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Message containing the checklist whose tasks were marked as done or not done.
         * Note that the Message object in this field will not contain the reply_to_message
         * field even if it itself is a reply.
         * @var Message
         */
        public ?Message $checklist_message,
        /**
         * Identifiers of the tasks that were marked as done
         * @var int[]
         */
        public ?array $marked_as_done_task_ids,
        /**
         * Identifiers of the tasks that were marked as not done
         * @var int[]
         */
        public ?array $marked_as_not_done_task_ids,
    ) {
    }
}
