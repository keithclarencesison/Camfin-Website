<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleImage;
use Illuminate\Http\RedirectResponse;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::latest()->paginate(5);
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
            'brand'        => 'nullable|string|max:255',
            'model'        => 'nullable|string|max:255',
            'year'         => 'nullable|integer',
            'price'        => 'nullable|numeric',
            'description'  => 'nullable|string',
            'main_image'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'image|max:2048'
        ]);

        $imageUrl = null;

        if ($request->hasFile('main_image')) {
            try {
                $result = Cloudinary::uploadApi()->upload(
                    $request->file('main_image')->getRealPath(),
                    [
                        'folder' => 'vehicles',
                        'resource_type' => 'auto',
                    ]
                );

                $imageUrl = $result['secure_url'];
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['main_image' => 'Upload failed: ' . $e->getMessage()]);
            }
        }


        $vehicle = Vehicle::create([
            'vehicle_name'          => $request->vehicle_name,
            'description'           => $request->description,
            'brand'                 => $request->brand,
            'model'                 => $request->model,
            'year'                  => $request->year,
            'price'                 => $request->price,
            'main_image'            => $imageUrl,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $result = Cloudinary::uploadApi()->upload(
                    $file->getRealPath(),
                    [
                        'folder' => 'vehicles/gallery',
                        'resource_type' => 'auto',
                    ]
                );

                // Save to VehicleImage table
                VehicleImage::create([
                    'vehicle_id' => $vehicle->id,
                    'image'  => $result['secure_url'],
                    'public_id'  => $result['public_id'] ?? null,
                ]);
            }
        }


        return redirect()
            ->route('admin.dashboard', ['tab' => 'asset'])
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
    public function destroy(Vehicle $vehicle)
    {
        // Delete main image if it has a public_id
        if (!empty($vehicle->main_image_public_id)) {
            Cloudinary::uploadApi()->destroy($vehicle->main_image_public_id);
        }

        // Delete gallery images
        foreach ($vehicle->images as $image) {
            if (!empty($image->public_id)) {
                Cloudinary::uploadApi()->destroy($image->public_id);
            }
            $image->delete(); // remove from DB
        }

        // Finally delete vehicle record
        $vehicle->delete();

        return redirect()
            ->route('admin.dashboard', ['tab' => 'asset'])
            ->with('success', 'Vehicle deleted successfully');
    }
}