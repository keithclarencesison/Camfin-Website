<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::latest()->paginate(10);
        return view('admin.vehicles.index', compact('vehicles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'vehicle_name' => 'required|string|max:255',
            'main_image' => 'required|image',
            'images.*' => 'image',

        ]);

        $mainFile = $request->file('main_image');
        if (!$mainFile) {
            return redirect()->back()->withErrors(['main_image' => 'Main image is required.']);
        }
        $upload = Cloudinary::upload(
            $mainFile->getPathname(),
            ['folder' => 'vehicles']
        );


        $mainImage = $upload->getSecurePath();
        $mainImagePublicId = $upload->getPublicId();


        $vehicle = Vehicle::create([
            'vehicle_name' => $request->vehicle_name,
            'description' => $request->description,
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'main_image' => $mainImage, 
            'main_image_public_id' => $mainImagePublicId,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $upload = Cloudinary::upload(
                    $image->getRealPath(),
                    ['folder' => 'vehicles']
                );

                $vehicle->images()->create([
                    'image' => $upload->getSecurePath(),
                    'public_id' => $upload->getPublicId(),
                ]);
            }
        }

        return redirect()->route('admin.dashboard', ['tab' => 'vehicles'])
                        ->with('success', 'Vehicle added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return view('admin.vehicles.show', compact('vehicle'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);

        // If image exists, delete it
        // if ($vehicle->image && \Storage::exists('public/' . $vehicle->image)) {
        //     \Storage::delete('public/' . $vehicle->image);
        // }

        // Delete main image from Cloudinary
        if ($vehicle->main_image_public_id) {
            Cloudinary::destroy($vehicle->main_image_public_id);
        }

        foreach ($vehicle->images as $img) {
            if ($img->public_id) {
                Cloudinary::destroy($img->public_id);
            }
            $img->delete();
        }   

        $vehicle->delete();

        return redirect()->route('admin.dashboard', ['tab' => 'asset'])
                        ->with('success', 'Vehicle deleted successfully.');
    }
}
