<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faculty;


class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {
        $faculties = Faculty::all();
        return view('faculty.index', compact('faculties'));

    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faculty.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation (Optional)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:faculties,email',
            'phone' => 'required|string|max:15',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'department' => 'required|string',
            'qualification' => 'required|string',
            'designation' => 'required|string',
            'subjects' => 'required|string',
            'address' => 'nullable|string',
        ]);
    
        // Create the faculty record
        Faculty::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'dob' => $validated['dob'],
            'gender' => $validated['gender'],
            'department' => $validated['department'],
            'qualification' => $validated['qualification'],
            'designation' => $validated['designation'],
            'subjects' => $validated['subjects'],
            'address' => $validated['address'],
        ]);
    
        // Redirect with success message
        return redirect()->route('faculties.index')->with('success', 'Faculty added successfully!');
    }
    

    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $faculty = Faculty::findOrFail($id);
    return view('faculty.edit', compact('faculty'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:faculties,email,' . $faculty->id,
            'phone' => 'required|string|max:15',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'department' => 'required|string|max:100',
            'qualification' => 'required|string|max:255',
            'designation' => 'required|string|max:100',
            'subjects' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);
    
        $faculty->update($request->all());
    
        return redirect()->route('faculties.index')->with('success', 'Faculty updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
    
        return redirect()->route('faculties.index')->with('success', 'Faculty deleted successfully!');
    }
    
}
