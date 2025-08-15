<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

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
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_name' => 'required|string|max:255',
            'main_image' => 'required|image',
            'images.*' => 'image',

        ]);

        $mainImage = $request->file('main_image')->store('vehicles', 'public');

        $vehicle = Vehicle::create([
            'vehicle_name' => $request->vehicle_name,
            'description' => $request->description,
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'main_image' => $mainImage, 
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $vehicle->images()->create([
                    'image' => $image->store('vehicles', 'public')
                ]);
            }
        }

        return redirect()->route('admin.dashboard', ['tab' => 'vehicles'])->with('success', 'Vehicle added successfully');

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
        if ($vehicle->image && \Storage::exists('public/' . $vehicle->image)) {
            \Storage::delete('public/' . $vehicle->image);
        }

        $vehicle->delete();

        return redirect()->route('admin.dashboard', ['tab' => 'asset'])
                        ->with('success', 'Vehicle deleted successfully.');
    }
}
