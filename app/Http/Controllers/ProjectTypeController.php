<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use Illuminate\Http\Request;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.project_type.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProjectType::create($request->all());
        session()->flash('message', 'Successfully created');
        return redirect()->route('admin.project_type.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectType $projectType)
    {
        return view('admin.project_type.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectType $projectType)
    {
        return view('admin.project_type.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectType $projectType)
    {
        $projectType->update($request->all());
        session()->flash('message', 'Successfully updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectType $projectType)
    {
        $projectType->delete();
        session()->flash('message', 'Successfully deleted');
        return redirect()->route('admin.project_type.index');
    }
}
