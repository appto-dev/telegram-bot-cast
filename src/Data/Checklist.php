<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * Describes a checklist.
 */
final class Checklist implements TelegramBotData
{
    public function __construct(
        /** Title of the checklist */
        public string $title,
        /** Special entities that appear in the checklist title */
        public ?MessageEntity $title_entities,
        /** List of tasks in the checklist */
        public ChecklistTask $tasks,
        /** True, if users other than the creator of the list can add tasks to the list */
        public ?true $others_can_add_tasks,
        /**
         * True, if users other than the creator of the list can mark tasks as done or not
         * done
         */
        public ?true $others_can_mark_tasks_as_done,
    ) {
    }
}
