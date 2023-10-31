<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        view()->share('locations', Location::all());
        return view('admin.location.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $location = new Location();
        $location->name = $request->name;
        $location->slug = $request->slug;
        $location->status = $request->status;
        $location->save();
        session()->flash('message', 'Location created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        view()->share('location', $location);
        return view('admin.location.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        view()->share('location', $location);
        return view('admin.location.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $location->name = $request->name;
        $location->slug = $request->slug;
        $location->status = $request->status;
        $location->save();
        session()->flash('message', 'Location updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        session()->flash('message', 'Location deleted successfully');
        return redirect()->route('admin.location.index');
    }
}
