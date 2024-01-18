<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    //

    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'image' => ['required', 'image'],
            'skill_id' => ['required', 'skill_id']
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects');
            Project::create([
                'skill_id' => $request->skill_id,
                'name' => $request->name,
                'image' => $image,
                'project_url' => $request->project_url
            ]);
            return redirect()->route('projects.index');
        }
        return redirect()->back();
    }

    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }

    public function update(Request $request, Project $project)
    {
        $image = $project->image;
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'skill_id' => ['required']
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }
        $project->update([
            'name' => $request->name,
            'skill_id' => $request->skill_id,
            'image' => $image,
            'project_url' => $request->project_url
        ]);
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return redirect()->route('projects.index');
    }

}
