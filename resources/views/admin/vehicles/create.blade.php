<x-layouts.app>
    <div class="w-screen">
        <form action="{{ route('admin.vehicles.store') }}" method="POST" enctype="multipart/form-data" class="w-full h-full flex justify-center">
            @csrf
            <div class="card w-2xl bg-base-100 card-xl shadow-lg rounded-2xl m-10">
                <div class="card-body flex p-5">
                    <fieldset class="fieldset w-3/4 self-center">
                        <legend class="fieldset-legend">Asset Name</legend>
                        <input type="text" name="vehicle_name" class="input w-xl" placeholder="Asset Name" required/>
                    </fieldset>

                    <fieldset class="fieldset w-3/4 self-center">
                        <legend class="fieldset-legend">Brand</legend>
                        <input type="text" name="brand" class="input w-xl" placeholder="Brand" required/>
                    </fieldset>

                    <fieldset class="fieldset self-center">
                        <legend class="fieldset-legend">Model</legend>
                        <input type="text" name="model" class="input w-xl" placeholder="Model" required/>
                    </fieldset>

                    <fieldset class="fieldset self-center">
                        <legend class="fieldset-legend">Year</legend>
                        <input type="number" name="year" class="input w-xl" placeholder="Year" required/>
                    </fieldset>

                    <fieldset class="fieldset self-center">
                        <legend class="fieldset-legend">Price</legend>
                        <input type="number" name="price" step="0.01" class="input w-xl" placeholder="Price" required/>
                    </fieldset>

                    <fieldset class="fieldset self-center">
                        <legend class="fieldset-legend">Description</legend>
                        <textarea class="textarea h-36 w-xl" name="description" placeholder="Description"></textarea>
                    </fieldset>

                    <fieldset class="fieldset self-center">
                        <legend class="fieldset-legend">Header Image</legend>
                        <input type="file" class="file-input w-xl" name="main_image" required />
                        <label class="label">Max size 2MB</label>
                    </fieldset>

                    <fieldset class="fieldset self-center">
                        <legend class="fieldset-legend">Images</legend>
                        <input type="file" class="file-input w-xl" name="images[]" multiple required />
                        <label class="label">Select multiple picture</label>
                    </fieldset>

                    <button class="btn btn-soft btn-info w-1/2 self-center m-10" type="submit">Create</button>
                </div>
            </div>
        </form>
    </div>

</x-layouts.app>
