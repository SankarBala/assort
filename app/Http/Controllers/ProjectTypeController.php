<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        view()->share('project_types', ProjectType::all());
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
        $projectType = new ProjectType();
        $projectType->name = $request->name;
        $projectType->slug = Str::slug($request->name);
        $projectType->status = 1;
        $projectType->save();
        session()->flash('message', 'Successfully created');
        return redirect()->route('admin.project-type.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectType $projectType)
    {
        view()->share('project_type', $projectType);
        return view('admin.project_type.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectType $projectType)
    {
        view()->share('project_type', $projectType);
        return view('admin.project_type.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectType $projectType)
    {
        $projectType->name = $request->name;
        $projectType->slug = $request->slug;
        $projectType->status = $request->status;
        $projectType->save();
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
        return redirect()->route('admin.project-type.index');
    }
}
