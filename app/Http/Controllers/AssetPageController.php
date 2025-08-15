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
        return view('pages.asset.show', compact('vehicle'));
    }
}
