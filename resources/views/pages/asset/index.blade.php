<x-layouts.app>
    @include('sections.navbar-section')
    <h1 class="text-center text-3xl font-bold my-8">Our Assets</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
        @foreach ($vehicles as $vehicle)
            <div class="border rounded-lg shadow p-4">
                <img src="{{ asset('storage/' . $vehicle->main_image) }}" alt="{{ $vehicle->vehicle_name }}" class="w-full h-48 object-cover rounded">
                <h2 class="text-xl font-semibold mt-3">{{ $vehicle->vehicle_name }}</h2>
                <p class="text-gray-600">{{ $vehicle->brand }} - {{ $vehicle->model }}</p>
                <p class="font-bold mt-2">₱{{ number_format($vehicle->price, 2) }}</p>
                <a href="{{ route('assets.show', $vehicle->id) }}" class="text-blue-500 hover:underline mt-2 block">View Details</a>
            </div>
        @endforeach
    </div>

    <div class="mt-8 px-6">
        {{ $vehicles->links() }}
    </div>

</x-layouts.app>