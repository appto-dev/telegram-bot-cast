<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;

/**
 * A mathematical expression.
 */
final class RichTextMathematicalExpression implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "mathematical_expression" */
        public string $type,
        /** The expression in LaTeX format */
        public string $expression,
    ) {
    }
}
