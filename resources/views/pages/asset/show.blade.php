<x-layouts.app>
    @include('sections.navbar-section')
    <div class="w-screen flex flex-col">
        <div class="breadcrumbs self-center text-sm my-5">
            <ul>
                <li><a href="{{ url('/', [], false) }}">Home</a></li>
                <li><a href="{{ route('assets.index') }}">Assets</a></li>
                <li><p class="text-gray-500">{{ $vehicle->vehicle_name }}</p></li>
            </ul>
        </div>
        <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Left: Image Gallery --}}
            <div class="flex flex-col md:flex-row gap-4">
                    {{-- Thumbnails --}}
                <div class="flex md:flex-col gap-2 order-2 md:order-1">
                    @php
                        // Collect all images (main + additional if exists)
                        $images = [];
                        if (!empty($vehicle->main_image)) {
                            $images[] = $vehicle->main_image;
                        }
                        if ($vehicle->images && $vehicle->images->count()) {
                            foreach ($vehicle->images as $img) {
                                $images[] = $img->image;
                            }
                        }
                    @endphp

                    @foreach($images as $img)
                        <img src="{{ $img }}" 
                            class="w-20 h-20 object-cover border rounded cursor-pointer hover:opacity-80"
                            onclick="document.getElementById('mainImage').src=this.src">
                    @endforeach
                </div>

                    {{-- Main Image --}}
                <div class="flex-1 order-1 md:order-2">
                    <img id="mainImage" 
                        src="{{ $images[0] ?? asset('default.jpg') }}" 
                        class="w-full h-auto object-cover rounded-lg shadow">
                </div>
            </div>

            {{-- Right: Vehicle Info --}}
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl font-bold">{{ $vehicle->vehicle_name }}</h1>
                    <p class="text-xl text-red-500 font-semibold mt-2">₱{{ number_format($vehicle->price, 2) }}</p>
                </div>

                <div>
                    <span class="block text-gray-600 font-semibold">Brand:</span>
                    <span class="text-gray-800">{{ $vehicle->brand ?? 'N/A' }}</span>
                </div>

                <div>
                    <span class="block text-gray-600 font-semibold">Model:</span>
                    <span class="text-gray-800">{{ $vehicle->model ?? 'N/A' }}</span>
                </div>

                <div>
                    <span class="block text-gray-600 font-semibold">Year:</span>
                    <span class="text-gray-800">{{ $vehicle->year ?? 'N/A' }}</span>
                </div>

                <div>
                    <span class="block text-gray-600 font-semibold">Description:</span>
                    <p class="text-gray-700 leading-relaxed">{{ $vehicle->description }}</p>
                </div>

                {{-- Action Buttons --}}
                <div class="flex">
                    <button class="px-6 py-3 bg-gray-200 rounded-lg hover:bg-gray-300">
                        Contact Seller
                    </button>
                </div>
            </div>

        </div>
    </div>
    

</x-layouts.app>
