<x-layouts.app>

<h1 class="text-2xl mb-4">Vehicle Management</h1>

<a href="{{ route('admin.vehicles.create') }}" class="bg-green-500 text-white px-4 py-2 mb-4 inline-block">Add Vehicle</a>

@if($vehicles->count() > 0)
    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Image</th>
                <th class="border p-2">Name</th>
                <th class="border p-2">Brand</th>
                <th class="border p-2">Model</th>
                <th class="border p-2">Year</th>
                <th class="border p-2">Price</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
                <tr class="text-center">
                    <td class="border p-2">
                        @if($vehicle->main_image && file_exists(public_path('storage/' . $vehicle->main_image)))
                            <img src="{{ asset('storage/' . $vehicle->main_image) }}" alt="{{ $vehicle->title }}" class="w-24 h-24 object-cover mx-auto">
                        @else
                            <span>No image</span>
                        @endif
                    </td>
                    <td class="border p-2">{{ $vehicle->vehicle_name }}</td>
                    <td class="border p-2">{{ $vehicle->brand }}</td>
                    <td class="border p-2">{{ $vehicle->model }}</td>
                    <td class="border p-2">{{ $vehicle->year }}</td>
                    <td class="border p-2">₱{{ number_format($vehicle->price, 2) }}</td>
                    <td class="border p-2 flex justify-center gap-2">
                        <a href="{{ route('admin.vehicles.edit', $vehicle->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>

                        <form action="{{ route('admin.vehicles.destroy', $vehicle->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No vehicles found.</p>
@endif

</x-layouts.app>
