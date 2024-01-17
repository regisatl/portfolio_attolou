<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SkillController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('Skills/Index');
    }

    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'image' => ['required', 'image']
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');
            Skill::create([
                'name' => $request->name,
                'image' => $image
            ]);
            return redirect()->route('skills.index');
        }
        return redirect()->back();
    }

}
