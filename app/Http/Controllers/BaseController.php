<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\FlatBuySale;
use App\Models\LandBuySale;
use App\Models\Location;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Site;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function __construct()
    {
        view()->share('project_types', ProjectType::all());
        view()->share('projects', Project::where('status', 1)->get());
        view()->share('locations', Location::all());
        view()->share('areas', Area::all());
        view()->share('site', Site::find(1));
    }

    public function home()
    {
        return view('home');
    }

    public function term_of_use()
    {
        return view('term-of-use');
    }

    public function message_from_md()
    {
        return view('md-message');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function about_us()
    {
        return view('about-us');
    }

    public function land_wanted()
    {
        return view('land-wanted');
    }

    public function store_land_wanted(Request $request)
    {
        $flatBuySale = new LandBuySale();
        $flatBuySale->name = $request->name;
        $flatBuySale->phone = $request->phone;
        $flatBuySale->address = $request->address;
        $flatBuySale->area = $request->land_area;
        $flatBuySale->width = $request->road_width;
        $flatBuySale->save();

        session()->flash('message', 'Request successfully sent.');
        return redirect()->back();
    }

    public function flat_buy_sale()
    {
        return view('flat-buy-sale');
    }

    public function store_flat_buy_sale(Request $request)
    {
        $flatBuySale = new FlatBuySale();
        $flatBuySale->name = $request->name;
        $flatBuySale->phone = $request->phone;
        $flatBuySale->address = $request->address;
        $flatBuySale->flat_size = $request->flat_size;
        $flatBuySale->save();

        session()->flash('message', 'Request successfully sent.');
        return redirect()->back();
    }


    public function projects()
    {
        return view('projects');
    }

    public function project(Project $project)
    {
        view()->share('project', $project);
        return view('project');
    }

    public function project_type(ProjectType $project_type)
    {
        view()->share('project_type', $project_type);
        return view('project-type');
    }

    public function search()
    {
        $projectTypeId = request('project_type_id');
        $locationId = request('location_id');
        $areaId = request('area_id');

        $query = Project::where('status', 1);

        if ($projectTypeId != 0) {
            $query->where('project_type_id', $projectTypeId);
        }
        if ($locationId != 0) {
            $query->where('location_id', $locationId);
        }

        if ($areaId != 0) {
            $query->where('area_id', $areaId);
        }

        $results = $query->get();

        view()->share('searched_projects', $results);
        return view('search');
    }
}
