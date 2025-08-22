<x-layouts.app>

<form action="{{ route('admin.vehicles.store') }}" method="POST" enctype="multipart/form-data" class="bg-gray-300">
    @csrf
    <input type="text" name="vehicle_name" required>
    <input type="text" name="brand">
    <input type="text" name="model">
    <input type="number" name="year">
    <input type="number" step="0.01" name="price">
    <textarea name="description"></textarea>
    <input type="file" name="main_image" required>
    <input type="file" name="images[]" multiple>
    <button type="submit">Save</button>
</form>

</x-layouts.app>
