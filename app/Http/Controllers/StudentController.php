<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255|unique:students,registration_number',
            'course' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
        ]);

        Student::create([
            'user_id' => auth()->id(),
            'full_name' => $request->full_name,
            'registration_number' => $request->registration_number,
            'course' => $request->course,
            'gender' => $request->gender,
        ]);

        return redirect()->route('students.index')
            ->with('success', 'Student added successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255|unique:students,registration_number,' . $student->id,
            'course' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
        ]);

        $student->full_name = $request->full_name;
        $student->registration_number = $request->registration_number;
        $student->course = $request->course;
        $student->gender = $request->gender;

        $student->save();

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }
}