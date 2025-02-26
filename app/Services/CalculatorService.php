<?php

namespace App\Services;

class CalculatorService
{
    /**
     * Perform a calculation based on the specified operation.
     */
    public function calculate(float $firstNumber, float $secondNumber, string $operation): array
    {
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $this->add($firstNumber, $secondNumber);
                break;
            case 'subtract':
                $result = $this->subtract($firstNumber, $secondNumber);
                break;
            case 'multiply':
                $result = $this->multiply($firstNumber, $secondNumber);
                break;
            case 'divide':
                $result = $this->divide($firstNumber, $secondNumber);  // can throw \Exception if $secondNumber=0
                break;
            default:
                throw new \InvalidArgumentException('Invalid operation.');
        }

        return [
            'result' => $result,
            'firstNumber' => $firstNumber,
            'secondNumber' => $secondNumber,
            'operation' => $operation,
        ];
    }

    private function add(float $a, float $b): float
    {
        return $a + $b;
    }

    private function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    private function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * @throws \Exception If dividing by zero.
     */
    private function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \Exception('Division by zero is not allowed');
        }
        return $a / $b;
    }
}
