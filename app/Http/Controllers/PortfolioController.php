<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Message;

class PortfolioController extends Controller
{
    public function index()
    {
        // 1. Fetch Data
        $profile = Profile::first();
        $techSkills = Skill::where('type', 'technical')->get();
        $softSkills = Skill::where('type', 'soft')->get();
        $projects = Project::all();

        // 2. Return the 'single' view
        // This matches resources/views/single.blade.php
        return view('single', compact('profile', 'techSkills', 'softSkills', 'projects'));
    }

    // For storing message
    public function store(Request $request)
    {
        // 1. Validate the inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Store in Database
        Message::create($validated);

        // 3. Redirect back with a success message
        return redirect()->back()
                ->with('success', 'Thank you! Your message has been sent.')
                ->withFragment('contact_container');
    }
}