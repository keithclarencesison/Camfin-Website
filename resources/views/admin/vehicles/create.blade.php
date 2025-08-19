<x-layouts.app>
    
    <form action="{{ route('admin.vehicles.store') }}" method="POST" enctype="multipart/form-data">
        <div class="w-screen h-screen flex justify-center">
            <div class="w-[600px] bg-gray-200 rounded-2xl self-center p-10">
                @csrf
                <div class="form-content flex flex-col">
                    <h1 class="text-center text-3xl font-bold">Create an Asset</h1>
                    <fieldset class="w-full fieldset self-center">
                        <legend class="fieldset-legend">Vehicle Name</legend>
                        <input type="text" name="vehicle_name" class="input w-full" placeholder="Vehicle Name" required/>
                    </fieldset>

                    <fieldset class="w-full fieldset self-center">
                        <legend class="fieldset-legend">Brand</legend>
                        <input type="text" name="brand" class="input w-full" placeholder="Brand" required/>
                    </fieldset>

                    <fieldset class="w-full fieldset">
                        <legend class="fieldset-legend">Model</legend>
                        <input type="text" name="model" class="input w-full" placeholder="Model" required/>
                    </fieldset>

                    <fieldset class="w-full fieldset self-center">
                        <legend class="fieldset-legend">Year</legend>
                        <input type="number" name="year" class="input w-full" placeholder="Year" required/>
                    </fieldset>

                    <fieldset class="w-full fieldset self-center">
                        <legend class="fieldset-legend">Price</legend>
                        <input type="number" step="0.01" name="price" class="input w-full" placeholder="Price" required/>
                    </fieldset>

                    <fieldset class="w-full fieldset self-center">
                        <legend class="fieldset-legend">Description</legend>
                        <textarea class="textarea h-24 w-full" name="description" placeholder="Description"></textarea>
                    </fieldset>

                    <fieldset class="w-full fieldset self-center">
                        <legend class="fieldset-legend">Main Image</legend>
                        <input type="file" class="file-input" name="main_image" required />
                    </fieldset>

                    <fieldset class="w-full fieldset self-center">
                        <legend class="fieldset-legend">Images</legend>
                        <input type="file" class="file-input" name="images[]" multiple />
                    </fieldset>

                    <button type="submit" class="w-1/2 m-auto  bg-blue-500 text-white p-2 mt-10 cursor-pointer">Add Vehicle</button>

                </div>
            </div>
        </div>
       
    </form>

</x-layouts.app>
