<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = \App\Models\Student::all();
        return view('students.index', compact('students'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'course' => 'required',
            'enrollment_year' => 'required|digits:4|integer',
        ]);
    
        \App\Models\Student::create($request->all());
    
        return redirect()->route('students.index')->with('success', 'Student added successfully.');
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
        $student = \App\Models\Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = \App\Models\Student::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'course' => 'required',
            'enrollment_year' => 'required|digits:4|integer',
        ]);
    
        $student->update($request->all());
    
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $student = \App\Models\Student::findOrFail($id);
    $student->delete();

    return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
}

}
