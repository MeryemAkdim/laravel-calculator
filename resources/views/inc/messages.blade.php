@if (session('result') !== null)
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        Result: {{ session('result') }}
    </div>
@endif

@if (session('error') !== null)
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif
