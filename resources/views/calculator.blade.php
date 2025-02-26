@extends('layout.public_app')

@section('content')
    <div class="container mx-auto px-4 py-20">
        <div class="max-w-md mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gray-800 px-6 py-4">
                    <h3 class="text-xl font-semibold text-white text-center">Calculator</h3>
                </div>
                <div class="p-6">
                    <!----------------Calculation Form--------------------->
                    <form action="{{ route('calculate') }}" method="POST">
                        @csrf
                        <!----------------Calculation Inputs--------------------->
                        <div class="mb-4">
                            <label for="first_number" class="block text-gray-700 text-sm font-bold mb-2">First
                                Number</label>
                            <input type="number" step="any"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                                @error('first_number') border-red-500 focus:border-red-500 @enderror"
                                id="first_number" name="first_number" value="{{ old('first_number') }}" required>
                            @error('first_number')
                                <p class="text-red-500 text-sm italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="operation" class="block text-gray-700 text-sm font-bold mb-2">Operation</label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                                @error('operation') border-red-500 focus:border-red-500 @enderror"
                                id="operation" name="operation" required>
                                @foreach ($operations as $operation)
                                    <option value="{{ $operation->value }}"
                                        {{ old('operation') == $operation->value ? 'selected' : '' }}>
                                        {{ $operation->lable() }}
                                    </option>
                                @endforeach
                            </select>
                            @error('operation')
                                <p class="text-red-500 text-sm italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="second_number" class="block text-gray-700 text-sm font-bold mb-2">Second
                                Number</label>
                            <input type="number" step="any"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                                @error('second_number') border-red-500 focus:border-red-500 @enderror"
                                id="second_number" name="second_number" value="{{ old('second_number') }}" required>
                            @error('second_number')
                                <p class="text-red-500 text-sm italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!----------------Calculation Inputs--------------------->

                        <!----------------Calculation Result--------------------->
                        @include('inc.messages')
                        <!----------------Calculation Result--------------------->

                        <!----------------Calculation Button--------------------->
                        <div class="flex flex-col gap-4 items-center justify-center">
                            <div class="flex gap-4 w-full">
                                <a href="{{ route('calculator') }}"
                                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded flex-1 text-center">
                                    Reset
                                </a>
                                <button type="submit"
                                    class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded flex-1">
                                    Calculate
                                </button>
                            </div>

                            <a href="/" class="text-blue-500 hover:text-blue-700 text-center">
                                Back to Home
                            </a>
                        </div>
                        <!----------------Calculation Button--------------------->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
