<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CalculatorService;

class CalculatorServiceTest extends TestCase
{
    protected CalculatorService $calculatorService;

    public function setUp(): void
    {
        parent::setUp();
        $this->calculatorService = new CalculatorService();
    }

    public function testAddition()
    {
        $calculator = $this->calculatorService->calculate(1, 2, 'add');
        $this->assertEquals(3, $calculator['result']);
    }

    public function testSubtraction()
    {
        $calculator = $this->calculatorService->calculate(5, 3, 'subtract');
        $this->assertEquals(2, $calculator['result']);
    }

    public function testMultiplication()
    {
        $calculator = $this->calculatorService->calculate(2, 3, 'multiply');
        $this->assertEquals(6, $calculator['result']);
    }

    public function testDivision()
    {
        $calculator = $this->calculatorService->calculate(10, 2, 'divide');
        $this->assertEquals(5, $calculator['result']);
    }

    public function testDivisionByZero()
    {
        $this->expectException(\Exception::class);
        $this->calculatorService->calculate(10, 0, 'divide');
    }

    public function testInvalidOperation()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculatorService->calculate(1, 2, 'invalid');
    }
}
