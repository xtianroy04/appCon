<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    // Display Data from database
    public function index()
    {
        $students = Student::paginate(10);;
        return view('home', ['students' => $students]);
    }

    // Display add student form
    public function addForm()
    {
        return view('addStudents');
    }

    // Process the add student
    public function processAdd(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'gender' => 'required|in:male,female',
            'school' => 'required|string|max:255',
        ]);

        Student::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'school' => $request->input('school'),
        ]);

        return redirect()->route('home')->with('success', 'Student added successfully!');
    }

    // Delete data
    public function delete($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('home')->with('error', 'Student not found!');
        }

        $student->delete();

        return redirect()->route('home')->with('success', 'Student "' . $student->last_name ." ". $student->first_name . '" deleted successfully!');
    }

    // Display update form
    public function updateForm($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('home')->with('error', 'Student not found!');
        }

        return view('updateStudentForm', ['student' => $student]);
    }

    // Process update student
    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('home')->with('error', 'Student not found!');
        }

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'gender' => 'required|in:male,female',
            'school' => 'required|string|max:255',
        ]);

        $student->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'school' => $request->input('school'),
        ]);

        return redirect()->route('home')->with('success', 'Student "' . $student->last_name ." ". $student->first_name . '" updated successfully!');
    }
}

