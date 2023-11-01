<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Site;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        view()->share('projects', Project::all());
        view()->share('project_types', ProjectType::all());
        return view('admin.home');
    }

    public function site_details()
    {
        view()->share('site', Site::first());
        return view('admin.site');
    }

    public function site_edit()
    {
        view()->share('site', Site::first());
        return view('admin.site-edit');
    }

    public function site_update(Site $site, Request $request)
    {

        $site->name = $request->name;
        $site->title = $request->title;
        $site->description = $request->description;
        $site->keywords = $request->keywords;
        $site->rel = $request->rel;
        $site->revisit = $request->revisit;
        $site->owner = $request->owner;
        $site->author = $request->author;
        $site->email = $request->email;
        $site->link = $request->link;
        $site->copyright = $request->copyright;
        $site->save();
        session()->flash('message', 'Site Details Updated Successfully');

        view()->share('site', Site::first());
        return redirect()->back();
    }

    public function site_logo()
    {
        view()->share('site', Site::first());
        return view('admin.site-logo');
    }

    public function site_logo_update(Request $request)
    {
        $site = Site::first();

        if ($request->delete) {
            $site->logo = "";
            session()->flash('message', 'Site Logo Deleted Successfully');
        } else {
            if ($request->hasFile('logo')) {
                $image = $request->file('logo');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $path = "site/images";
                $image->storeAs("public/$path", $imageName);
                $url = "storage/$path/" . $imageName;
                $site->logo = $url;
                session()->flash('message', 'Site Logo Updated Successfully');
            }
        }
        $site->save();
        return redirect()->back();
    }
}
