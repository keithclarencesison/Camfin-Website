<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AssetPageController extends Controller
{
    public function index()
        {
            $vehicles = Vehicle::latest()->paginate(9);
            return view('pages.asset.index', compact('vehicles'));
        }

        public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        if (!$vehicle) {
            // Optional: redirect to assets list with a message
            return redirect()->route('assets.index')
                             ->with('error', 'Asset not found.');
        }

        return view('pages.asset.show', compact('vehicle'));
    }
}
