<?php

namespace App\Http\Controllers;

use App\Models\Mentor; // Make sure your Mentor model is imported

class MentorController extends Controller
{
    public function index()
    {
        // Eager load the modules with the mentors
        $mentors = Mentor::with('modules')->get();
        
        // Passing mentors data to the view
        return view('mentors.index', ['mentors' => $mentors]);
    }

    public function show($id)
    {
        // Fetch the mentor by ID from the database
        $mentor = Mentor::findOrFail($id);

        // Return the view and pass the mentor data to it
        return view('mentors.show', compact('mentor'));
    }
}
