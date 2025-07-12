<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;   // Import the Student model
use App\Models\Faculty;   // Import the Faculty model
use App\Models\Course;    // Import the Course model

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data to display on the dashboard
        $studentsCount = Student::count();
        $facultyCount = Faculty::count();
        $coursesCount = Course::count();

        // Return the dashboard view and pass the data
        return view('dashboard', compact('studentsCount', 'facultyCount', 'coursesCount'));
    }
}
