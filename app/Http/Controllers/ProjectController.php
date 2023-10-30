<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Country;
use App\Models\Location;
use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        view()->share('projects', Project::all());
        return view('admin.project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        view()->share('project_types', ProjectType::all());
        view()->share('locations', Location::all());
        view()->share('areas', Area::all());
        view()->share('countries', Country::all());

        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'project_type_id' => 'required',
        //     'location_id' => 'required',
        //     'area_id' => 'required',
        //     'country_id' => 'required',
        //     'name' => 'required',
        //     'description' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'status' => 'required',
        // ]);


        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = "projects/images";
            $image->storeAs("public/$path", $imageName);
            $url = "storage/$path/" . $imageName;
        }

        $project = new Project();
        $project->project_type_id = $request->project_type_id;
        $project->name = $request->name;
        $project->slug = Str::slug($request->name);
        $project->country_id = $request->country_id;
        $project->location_id = $request->location_id;
        $project->area_id = $request->area_id;
        $project->address = $request->address;
        $project->zip_code = $request->zip_code;
        $project->flat_size = $request->flat_size;
        $project->parking = $request->parking;
        $project->height = $request->height;
        $project->lift = $request->lift;
        $project->substation = $request->substation;
        $project->generator = $request->generator;
        $project->unit = $request->unit;
        $project->hand_over = $request->hand_over;
        $project->details = $request->details;
        $project->featured = $request->featured;
        $project->photo =  $url ?? null;
        $project->save();

        session()->flush('message', 'Project successfully created.');
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        view()->share('project', $project);
        return view('admin.project.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        view()->share('project_types', ProjectType::all());
        view()->share('locations', Location::all());
        view()->share('areas', Area::all());
        view()->share('countries', Country::all());
        view()->share('project', $project);

        return view('admin.project.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = "projects/images";
            $image->storeAs("public/$path", $imageName);
            $url = "storage/$path/" . $imageName;
        }

        $project->project_type_id = $request->project_type_id;
        $project->name = $request->name;
        $project->slug = Str::slug($request->name);
        $project->country_id = $request->country_id;
        $project->location_id = $request->location_id;
        $project->area_id = $request->area_id;
        $project->address = $request->address;
        $project->zip_code = $request->zip_code;
        $project->flat_size = $request->flat_size;
        $project->parking = $request->parking;
        $project->height = $request->height;
        $project->lift = $request->lift;
        $project->substation = $request->substation;
        $project->generator = $request->generator;
        $project->unit = $request->unit;
        $project->hand_over = $request->hand_over;
        $project->details = $request->details;
        $project->featured = $request->featured;
        $project->photo =  $url ?? $project->photo;
        $project->status =  $request->status;
        $project->update();

        session()->flush('message', 'Project successfully updated.');
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }


    public function photo(Project $project)
    {
        view()->share('project', $project);
        return view('admin.project.photo');
    }

    public function photo_update(Request $request, Project $project)
    {
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = "projects/images";
            $image->storeAs("public/$path", $imageName);
            $url = "storage/$path/" . $imageName;
        }

        $project->photo = $url ?? $project->photo;
        $project->save();
        session()->flush('message', 'Photo successfully updated.');
        return redirect()->route('admin.project.photo.show', $project);
    }

    public function photo_delete(Project $project)
    {
        $project->photo = null;
        $project->save();
        session()->flush('message', 'Photo successfully deleted.');
        return redirect()->route('admin.project.photo.show', $project);
    }


    public function all_photos(Project $project)
    {
        view()->share('project', $project);

        // $project->load('galleries');

        // dd($project->toArray());

        return view('admin.project.photo-more');
    }


    public function add_photo(Request $request, Project $project)
    {

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = "projects/$project->id/images";
            $image->storeAs("public/$path", $imageName);
            $url = "storage/$path/" . $imageName;
        }


        $project->galleries()->create([
            'title' => $request->project_photo_title,
            'slug' => Str::slug($request->project_photo_title),
            'link' => $url,
            'project_id' => $project->id
        ]);


        session()->flush('message', 'Photo successfully added.');
        return redirect()->back();
    }
}
