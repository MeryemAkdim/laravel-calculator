<?php

namespace App\Enums;

enum OperationEnum: string
{
    case ADD = 'add';
    case SUBTRACT = 'subtract';
    case MULTIPLY = 'multiply';
    case DIVIDE = 'divide';

    public function lable(): string
    {
        return match ($this) {
            self::ADD => 'Add (+)',
            self::SUBTRACT => 'Subtract (-)',
            self::MULTIPLY => 'Multiply (×)',
            self::DIVIDE => 'Divide (÷)',
        };
    }
}
