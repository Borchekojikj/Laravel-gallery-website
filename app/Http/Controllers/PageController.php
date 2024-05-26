<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Mail\ContactUs;
use App\Mail\MyEmail;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {

        $projects = Project::get();
        return view('pages.index', compact('projects'));
    }

    public function store()
    {
        return view('pages.store');
    }

    public function create(CreateProjectRequest $request)
    {
        $project = $request->validated();
        Project::create($project);
        $projects = Project::get();

        return redirect()->route('home', compact('projects'))->with('status', 'Project added');
    }


    public function edit()
    {
        $projects = Project::get();
        return view('pages.editview', compact('projects'));
    }

    public function editProject($id)
    {
        $project = Project::find($id);

        return view('pages.editProject', compact('project'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $project =  Project::find($id);
        $project->update($data);
        return redirect()->route('home')->with('status', 'Project updated');
    }


    public function send(Request $request)
    {

        $data = [
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
        ];

        Mail::to('borcekojikj@gmail.com')->send(new ContactUs($data));

        return redirect()->back()->with('success', 'Message was ent succesfully');
        dd('sent');
    }
}
