<x-layouts.app>
    
    <form action="{{ route('admin.vehicles.store') }}" method="POST" enctype="multipart/form-data">
        <div class="flex flex-col justify-center">
            @csrf
            <input type="text" name="vehicle_name" placeholder="Vehicle Name" required class="border p-2">
            <input type="text" name="brand" placeholder="Brand" class="border p-2">
            <input type="text" name="model" placeholder="Model" class="border p-2">
            <input type="number" name="year" placeholder="Year" class="border p-2">
            <input type="number" step="0.01" name="price" placeholder="Price" class="border p-2">
            <textarea name="description" placeholder="Description" class="border p-2"></textarea>
            <input type="file" name="main_image" required>
            <input type="file" name="images[]" multiple>
            <button type="submit" class="bg-blue-500 text-white p-2 mt-2">Add Vehicle</button>
        </div>
    </form>

</x-layouts.app>
