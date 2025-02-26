<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalculatorControllerTest extends TestCase
{
    public function test_index_page_returns_successful_response(): void
    {
        $response = $this->get(route('index'));
        $response->assertStatus(200);
        $response->assertViewIs('welcome');
    }

    public function test_calculator_page_returns_successful_response(): void
    {
        $response = $this->get(route('calculator'));
        $response->assertStatus(200);
        $response->assertViewIs('calculator');
    }

    public function test_calculate_addition_returns_successful_response(): void
    {
        $response = $this->post(route('calculate'), [
            'first_number' => 10,
            'second_number' => 5,
            'operation' => 'add'
        ]);

        $response->assertStatus(302); // Redirect status
        $response->assertRedirect();
    }

    public function test_calculate_subtraction_returns_successful_response(): void
    {
        $response = $this->post(route('calculate'), [
            'first_number' => 10,
            'second_number' => 5,
            'operation' => 'subtract'
        ]);

        $response->assertStatus(302); // Redirect status
        $response->assertRedirect();
    }

    public function test_calculate_multiplication_returns_successful_response(): void
    {
        $response = $this->post(route('calculate'), [
            'first_number' => 10,
            'second_number' => 5,
            'operation' => 'multiply'
        ]); 

        $response->assertStatus(302); // Redirect status
        $response->assertRedirect();
    }

    public function test_calculate_division_returns_successful_response(): void
    {
        $response = $this->post(route('calculate'), [
            'first_number' => 10,
            'second_number' => 5,
            'operation' => 'divide'
        ]);

        $response->assertStatus(302); // Redirect status
        $response->assertRedirect();
    }

    public function test_calculate_division_by_zero_returns_error_response(): void
    {
        $response = $this->post(route('calculate'), [
            'first_number' => 10,
            'second_number' => 0,
            'operation' => 'divide'
        ]);

        $response->assertStatus(302); // Redirect status
        $response->assertRedirect();
        $response->assertSessionHas('error', 'Division by zero is not allowed');
    }

    public function test_calculate_invalid_operation_returns_error_response(): void
    {
        $response = $this->post(route('calculate'), [
            'first_number' => 10,
            'second_number' => 5,
            'operation' => 'invalid_operation'
        ]);

        $response->assertStatus(302); // Redirect status
        $response->assertSessionHasErrors([
            'operation' => 'The selected operation is invalid.'
        ]);
    }
}