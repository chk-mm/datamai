<?php

namespace App\Http\Controllers;

use App\Models\Module;

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
}
