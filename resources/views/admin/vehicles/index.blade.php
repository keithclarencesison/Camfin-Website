<x-layouts.app>
    

    <div class="navbar bg-gray-200 border-b-1 border-gray-400 shadow-sm">
        <div class="flex-1">
            <h1 class="text-4xl font-bold">Asset</h1>
        </div>
        <div class="flex-none">
            <a href="{{ route('admin.vehicles.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + New Asset
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="text-3xl font-bold p-5">Foreclosed Asset</h1>


    @if($vehicles->count() > 0)
        <div class="overflow-x-auto w-full flex justify-center">
            <table class="table w-3/4 my-20">
                <thead>
                    <tr class="bg-gray-200 text-center">
                        <th class=""></th>
                        <th class="">Name</th>
                        <th class="">Brand</th>
                        <th class="">Model</th>
                        <th class="">Year</th>
                        <th class="">Price</th>
                        <th class=""></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                        <tr class="text-center">
                            <td class="">
                                @if($vehicle->main_image && file_exists(public_path('storage/' . $vehicle->main_image)))
                                    <img src="{{ asset('storage/' . $vehicle->main_image) }}" alt="{{ $vehicle->title }}" class="w-24 h-24 object-cover mx-auto">
                                @else
                                    <span>No image</span>
                                @endif
                            </td>
                            <td class="">{{ $vehicle->vehicle_name }}</td>
                            <td class="">{{ $vehicle->brand }}</td>
                            <td class="">{{ $vehicle->model }}</td>
                            <td class="">{{ $vehicle->year }}</td>
                            <td class="">₱{{ number_format($vehicle->price, 2) }}</td>
                            <td class="m-0">
                                <a href="{{ route('admin.vehicles.edit', $vehicle->id) }}" class="text-white px-2 py-1 rounded tooltip tooltip-top" data-tip="Edit Asset">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" text-blue-500" data-tip="Delete Post" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M12 20h9"/>
                                        <path d="M16.5 3.5a2.12 2.12 0 1 1 3 3L8 18l-4 1 1-4L16.5 3.5z"/>
                                    </svg>
                                </a>

                                <form action="{{ route('admin.vehicles.destroy', $vehicle->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" text-white px-2 py-1 rounded cursor-pointer tooltip" data-tip="Delete Asset">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="tooltip tooltip-top text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <polyline points="3 6 5 6 21 6"/>
                                                <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                                                <path d="M10 11v6"/>
                                                <path d="M14 11v6"/>
                                                <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No vehicles found.</p>
    @endif

</x-layouts.app>
