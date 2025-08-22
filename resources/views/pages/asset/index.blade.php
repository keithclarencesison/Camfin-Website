<x-layouts.app>
    @include('sections.navbar-section')
    <h1 class="text-center text-3xl font-bold my-8">Foreclosed Assets</h1>
    @if(isset($vehicles) && $vehicles->count())
        <div class="w-screen flex justify-center">   
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                @foreach ($vehicles as $vehicle)
                
                    <div class="card bg-base-100 shadow-sm">
                        <figure class="h-64">
                            <img
                            src="{{ $vehicle->main_image ?? asset('images/default.jpg') }}"
                            alt="{{ $vehicle->vehicle_name }}"
                            class="w-64 p-5 object-cover" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">{{ $vehicle->vehicle_name }}</h2>
                            <p class="">{{ $vehicle->brand }} <span>{{ $vehicle->model }}</span></p>
                            <p>₱{{ number_format($vehicle->price, 2) }}</p>
                            <div class="card-actions justify-end">
                                <a href="{{ route('assets.show', $vehicle->id) }}" class="btn btn-primary text-white hover:underline">Inquire</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        

        <div class="mt-8 px-6">
            {{ $vehicles->links() }}
        </div>
    @endif
</x-layouts.app>