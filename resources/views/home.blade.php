@extends('layout.public_app')

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-8">
        <div class="max-w-3xl w-full bg-white dark:bg-gray-800 rounded-2xl shadow-xl px-8 py-8 md:p-12">
            <!-- Logo Section -->
            <div class="text-center mb-12">
                <svg class="w-24 mx-auto text-[#F53003] dark:text-[#FF4433]" viewBox="0 0 50 52" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                        fill="currentColor" />
                </svg>
            </div>

            <!-- Main Content -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Welcome to Laravel Calculator
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">
                    A simple yet powerful calculator built with Laravel and modern web technologies.
                </p>

                <!-- Calculator Button -->
                <a href="/calculator"
                    class="inline-flex items-center px-8 py-3 bg-[#031bf5] text-white font-semibold rounded-lg shadow-md hover:bg-[#031bf5a4] transition duration-300 ease-in-out gap-2">
                    Launch Calculator
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5">
                        <path d="M4.16667 10H15.8333M15.8333 10L10.8333 5M15.8333 10L10.8333 15" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
                <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Basic Operations</h3>
                    <p class="text-gray-600 dark:text-gray-300">Addition, subtraction, multiplication, and division with
                        a clean interface.</p>
                </div>
                <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Responsive Design</h3>
                    <p class="text-gray-600 dark:text-gray-300">Works perfectly on all devices, from mobile to desktop.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-8 text-center text-gray-500 dark:text-gray-400">
            <p>Built with Laravel & Tailwind CSS</p>
        </footer>
    </div>
@endsection
