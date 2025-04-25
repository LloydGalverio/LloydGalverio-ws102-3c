<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
   // In your controller
public function index(Request $request)
{
    // Paginate students
    $search = $request->input('search');
    if ($search) {
        // If search is provided, filter the results
        $students = Student::where('name', 'like', "%{$search}%")
                           ->orWhere('student_id', 'like', "%{$search}%")
                           ->paginate(10);  // Paginate results (10 per page)
    } else {
        // Otherwise, retrieve all students and paginate
        $students = Student::paginate(10);  // Paginate results (10 per page)
    }

    return view('students.index', compact('students', 'search'));
}

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added!');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        $qrCode = QrCode::size(100)->generate(
            "Name: {$student->name}\nID: {$student->student_id}\nEmail: {$student->email}\nCourse: {$student->course}"
        );

        return view('students.show', compact('student', 'qrCode'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        Student::findOrFail($id)->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated!');
    }

    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted!');
    }
}
