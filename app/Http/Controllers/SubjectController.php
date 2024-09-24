<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    // Function to return the subject page
    public function showSubjects()
    {
        // Fetch all subjects from the database
        //$subjects = Subject::all(); // Make sure 'Subject' is correctly imported
        $subjects = Subject::where('id', 1)->get();

        // Pass the subjects to the view
        return view('subjects.subject', compact('subjects'));
    }

    // Show the form to create a new subject
    public function create()
    {
        return view('subjects.partials.create-subject'); // Blade template for the form
    }

    // Store the subject in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|unique:subjects', // Make sure the subject code is unique
            'description' => 'nullable|string',
        ]);

        // Create a new subject
        Subject::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'lecturer_id' => auth()->user()->id,
        ]);

        // Redirect back to the subject page with a success message
        return redirect()->route('subject')->with('success', 'Subject created successfully!');
    }
}


