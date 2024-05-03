<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;


class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all(); // Fetch all modules from the database
        return view('modules.index', ['modules' => $modules]); // Return them to the modules.index view
    }

    public function show($id)
    {
        // Retrieve the module with associated mentors
        $module = Module::with('mentors')->findOrFail($id);

        // Passing the module data to the view
        return view('modules.show', ['module' => $module]);
    }

    // In App\Http\Controllers\ModuleController

public function create()
{
    \Log::debug('Accessing create method in ModuleController');
    return view('modules.create'); // Return a view where users can add a new module
}

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:1000',
        'img_url'  => 'string|max:1000',
        // add other fields as necessary
    ]);

    Module::create($validated);
    return redirect()->route('modules.index')->with('success', 'Module added successfully!');
}




}
