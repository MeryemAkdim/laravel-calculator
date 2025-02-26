<?php

namespace App\Http\Controllers;

use App\Enums\OperationEnum;
use App\Http\Requests\CalculationRequest;
use App\Services\CalculatorService;

class CalculatorController extends Controller
{
    protected $calculatorService;

    public function __construct(CalculatorService $calculatorService)
    {
        $this->calculatorService = $calculatorService;
    }

    public function index()
    {
        return view('home');
    }

    public function calculator()
    {
        return view('calculator', [
            'operations' => OperationEnum::cases(),
        ]);
    }

    public function calculate(CalculationRequest $request)
    {
        try {
            // Attempt to calculate; exceptions may be thrown here.
            $result = $this->calculatorService->calculate(
                $request->first_number,
                $request->second_number,
                $request->operation
            );

            return redirect()->back()->with($result)->withInput();
        } 
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }
}
