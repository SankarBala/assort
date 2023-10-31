<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        view()->share('areas', Area::all());
        return view('admin.area.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        view()->share('locations', Location::all());
        return view('admin.area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $area = new Area();
        $area->name = $request->name;
        $area->slug = Str::slug($request->name);
        $area->location_id = $request->location_id;
        $area->status = 1;
        $area->save();
        session()->flash('message', 'Area created successfully');
        return redirect()->route('admin.area.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        view()->share('area', $area);
        return view('admin.area.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        view()->share('locations', Location::all());
        view()->share('area', $area);
        return view('admin.area.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $area->name = $request->name;
        $area->slug = $request->slug;
        $area->location_id = $request->location_id;
        $area->status = $request->status;
        $area->save();
        session()->flash('message', 'Area updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        session()->flash('message', 'Area deleted successfully');
        return redirect()->back();
    }
}
