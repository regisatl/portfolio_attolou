<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Inertia\Inertia;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcome()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Welcome', compact('skills'));

    }


}
