<?php

namespace App\Http\Controllers;

use App\Models\Mentor; // Make sure your Mentor model is imported
use App\Models\Module;

use Illuminate\Http\Request;

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

    public function create()
    {
        return view('mentors.create'); // returns the view with the form
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'photo_url' => 'required|string|max:255',
        ]);

        Mentor::create($validated);

        return redirect()->route('mentors.index')->with('success', 'Mentor added successfully!');
    }

    public function editModules($mentorId)
{
    $mentor = Mentor::findOrFail($mentorId);
    $modules = Module::all(); // Fetch all modules to display in the form
    return view('mentors.modules', compact('mentor', 'modules'));
}

public function updateModules(Request $request, $mentorId)
{
    $mentor = Mentor::findOrFail($mentorId);
    // Assuming 'modules' is the name of the input field in your form containing selected module IDs
    $mentor->modules()->sync($request->modules);
    return redirect()->route('mentors.index')->with('success', 'Modules updated successfully!');
}


}
